# POSSE Community Platform

大学生向けプログラミングコミュニティ「POSSE」の公式サイトを、カリキュラムに沿ってLaravelで模写したものです。
模写に加えて、バックエンドの学習としてクイズ・ブログ・管理者機能を自分で追加しました。

※ 公式サイトの内容を含みますが、あくまで学習用の模写です。本物は https://posse.community/ です。

## 機能

**認証・権限**
- Laravel Breezeによる登録・ログイン・パスワードリセット・メール認証
- 未ログイン／一般ユーザー／管理者の3段階で、ページごとにアクセスを制御
- 管理者ページは独自のミドルウェアで保護

**クイズ**
- 3択クイズ。回答するとその場で正誤を表示し、最後にスコアを集計
- 管理者は、クイズの作成・編集・削除と、削除したクイズの復元ができる（Soft Delete）

**ブログ**
- 管理者が記事を投稿し、公開／非公開を切り替えられる
- ログインしたユーザーは記事にコメントできる

**管理画面**
- クイズ数・ユーザー数などの集計
- ユーザーの一覧と削除

## 技術スタック

- バックエンド：Laravel 10（PHP 8.1）、SQLite、Pest
- フロントエンド：Vite、Tailwind CSS、Alpine.js、jQuery
- 環境：Docker Compose（Nginx、Node.js、phpMyAdmin）

## データベース設計

```
users（認証 + 管理者フラグ）
├── id, name, email, password, is_admin, email_verified_at

quizzes（クイズ）※ Soft Delete
├── id, name, deleted_at, created_at, updated_at
│
questions（設問）
├── id, quiz_id, text, image, supplement
│
choices（選択肢）※ 必ず3択
├── id, question_id, text, is_correct

posts（ブログ記事）
├── id, user_id, title, body, image, is_published
│
comments（コメント）
├── id, post_id, user_id, body
```

## 工夫したこと・苦労したこと

**クイズの一括作成をトランザクションで処理**

クイズ1つを作るときに、クイズ・設問・選択肢の3つのテーブルにまとめて保存します。途中で失敗したときに中途半端なデータが残らないよう、トランザクションでひとまとめにしました。

```php
return DB::transaction(function () use ($validated) {
    $quiz = Quiz::create(['name' => $validated['name']]);

    foreach ($validated['questions'] as $qData) {
        $question = $quiz->questions()->create([
            'text' => $qData['text'],
            'image' => $qData['image'] ?? null,
            'supplement' => $qData['supplement'] ?? null,
        ]);

        foreach ($qData['choices'] as $choiceIndex => $cData) {
            $question->choices()->create([
                'text' => $cData['text'],
                'is_correct' => ($choiceIndex == $qData['correct_index']),
            ]);
        }
    }
});
```

**1つの機能のために、たくさんのファイルを行き来すること**

Laravelでは、1つの機能を作るのにマイグレーション・モデル・コントローラー・ルーティング・ビューと、いくつものファイルを書く必要があります。最初はこれに一番苦労しました。

## AIの使用について

バックエンドは、Laravelの仕組みを理解するためにAIに書かせずに実装しました。
フロントエンドは学習の効率を優先して、ほぼKiroで作っています。そのため、見た目は少しシンプルです。

## セットアップ

> **注意**：Dockerの設定はMySQL前提ですが、実際の`.env`ではSQLiteを使っています。Dockerで起動すると問題が出る可能性があります。

### 1. 環境構築

```bash
git clone https://github.com/kamuuni/posse-website-ph3.git
cd posse-website-ph3

# Dockerを使う場合
docker compose build --no-cache
docker compose up -d
```

### 2. Laravel

```bash
# Dockerを使う場合はコンテナに入る
docker compose exec app sh

composer install
touch database/database.sqlite
php artisan migrate
php artisan db:seed
```

### 3. フロントエンド

```bash
# Dockerを使う場合はコンテナに入る
docker compose exec node sh

npm install
npm run dev
```

### 4. アクセス

- サイト：http://localhost
- phpMyAdmin：http://localhost:1234（Docker使用時のみ）
- Vite開発サーバー：http://localhost:5173

シーダーで作られる管理者アカウント（ローカル確認用）：`admin@posse.com` / `password123`

## テスト

```bash
php artisan test
```
