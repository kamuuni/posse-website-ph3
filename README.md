# 🎯 POSSE Community Platform

**大学生向けプログラミング学習コミュニティ「POSSE」公式Webサイト + クイズ学習システム + ブログシステム**

株式会社アンチパターンが運営する大学生向けプログラミング学習コミュニティ「POSSE」の公式WebサイトをPOSSE生専用学習カリキュラムに従って模写したものです。コミュニティ紹介の他にクイズ学習システム、ブログシステムを発展的なバックエンドの学習としてさらに追加し、実際の公式サイトとは違う総合プラットフォームとなっています。
実際のPOSSE公式サイトの内容を含みますが、真に受けないでください。
責任は一切負う気がありません。

## ✨ 主な機能

### 🏠 POSSEコミュニティ公式サイト
- **https://posse.community/** - こっちがホンモノなのでご注意ください。

### 🔐 認証・認可システム
- **Laravel Breeze** による完全な認証フロー（登録・ログイン・パスワードリセット・メール認証）
- **3段階権限システム** - 未認証/一般ユーザー/管理者の細かな権限制御
- **管理者専用パネル** - 独自ミドルウェアによる管理機能へのアクセス制御

### 🎮 インタラクティブクイズ学習システム
- **リアルタイム3択クイズ** - JavaScript による即座の正誤判定
- **スコア集計システム** - 全問終了後の結果表示・再挑戦機能
- **視覚的フィードバック** - 正解・不正解の色分け表示
- **補足情報表示** - 問題に関する追加説明機能
- **ITクイズ** - IT人材不足、X-TECH、IoT等の実践的な問題

### 📝 ブログ・コメントシステム
- **記事投稿機能** - 管理者による記事作成・編集
- **公開状態管理** - 公開/非公開の切り替え機能
- **コメント機能** - ログイン済みユーザーによるコメント投稿
- **投稿者情報表示** - 記事・コメントの投稿者・日時表示


### 👨‍💼 管理者機能
- **統計ダッシュボード** - クイズ数、ユーザー数、問題数の集計表示
- **クイズ管理CRUD** - 作成・編集・削除の完全な管理機能（最大10問/クイズ）
- **Soft Delete対応** - 削除済みクイズの復元・完全削除機能
- **トランザクション処理** - 複雑なデータ関係の安全な一括作成
- **ブログ記事管理** - 公開/非公開切り替え・画像対応
- **ユーザー管理** - 一覧表示・削除機能


## 🛠️ 技術スタック

### バックエンド
- **Laravel 10** - PHP 8.1+
- **SQLite** - 軽量データベース（開発環境）
- **Laravel Sanctum** - API認証
- **Pest** - 次世代テストフレームワーク

### フロントエンド
- **Vite** - 高速ビルドツール
- **Tailwind CSS 3** - ユーティリティファーストCSS + カスタムカラーパレット
- **Alpine.js** - 軽量リアクティブフレームワーク
- **jQuery + Slick Carousel** - インタラクティブ要素・画像スライダー

### インフラ・開発環境
- **Docker Compose** - マルチコンテナ開発環境（MySQL設定あり）
- **Nginx** - 高性能Webサーバー
- **phpMyAdmin** - データベース管理ツール
- **Node.js 18** - フロントエンドビルド環境

## 🏗️ アーキテクチャ

### データベース設計
```
users (認証 + 管理者フラグ)
├── id, name, email, password, is_admin, email_verified_at

quizzes (クイズセット) - Soft Deletes対応
├── id, name, deleted_at, created_at, updated_at
│
questions (設問)
├── id, quiz_id, text, image, supplement
│
choices (選択肢) - 必ず3択
├── id, question_id, text, is_correct

posts (ブログ記事)
├── id, user_id, title, body, image, is_published
│
comments (コメント)
├── id, post_id, user_id, body
```

### Docker構成
- **app**: PHP 8.1 + Laravel実行環境
- **node**: Node.js 18 フロントエンドビルド
- **web**: Nginx Webサーバー
- **mysql**: MySQL 8.0 データベース（設定のみ、実際はSQLite使用）
- **phpmyadmin**: DB管理インターフェース

## 🤖 AIの使用について
学習の効率化のため、フロントエンドに限定してほぼすべてkiroを使用して作っているため、見た目が結構つまらない感じになっています。
学習におけるこうした形でのAIの活用は、かのLinus Torvalds氏も実践しており、
推奨されるべきAIの賢い使い方であるという認識のもと使用しました。

## 🚀 セットアップ & 起動

### ⚠️ 重要な注意事項
現在、Docker設定ではMySQLを使用する前提ですが、実際の環境設定（`.env`）ではSQLiteを使用しています。この不整合により、Dockerでの起動時に問題が発生する可能性があります。

### 1. 環境構築
```bash
# リポジトリクローン
git clone <repository-url>
cd posse-website-ph3

# Docker環境構築（オプション）
docker compose build --no-cache
docker compose up -d
```

### 2. Laravel セットアップ
```bash
# アプリケーションコンテナに入る（Dockerを使用する場合）
docker compose exec app sh

# または、ローカル環境で直接実行
# 依存関係インストール
composer install

# 環境設定（既に.envファイルが存在）
# SQLiteデータベースファイルの作成
touch database/database.sqlite

# アプリケーションキー生成（既に設定済み）
# php artisan key:generate

# データベースマイグレーション
php artisan migrate

# シーダー実行（サンプルデータ）
php artisan db:seed
```

### 3. フロントエンド セットアップ
```bash
# Node.jsコンテナに入る（Dockerを使用する場合）
docker compose exec node sh

# または、ローカル環境で直接実行
# 依存関係インストール
npm install

# 開発用ビルド（ホットリロード）
npm run dev

# または本番用ビルド
npm run build
```

### 4. アクセス確認
- **メインサイト**: http://localhost
- **phpMyAdmin**: http://localhost:1234（Docker使用時のみ）
- **Vite開発サーバー**: http://localhost:5173

## 📱 主要ページ

| ページ | URL | 認証 | 権限 | 説明 |
|--------|-----|------|------|------|
| **ホーム** | `/` | 不要 | - | POSSEコミュニティ紹介ランディングページ |
| **クイズ一覧** | `/quizzes` | 必須 | 一般 | 利用可能なクイズ表示（6件/ページ） |
| **クイズ実行** | `/quizzes/{id}` | 必須 | 一般 | インタラクティブ3択クイズ |
| **ブログ一覧** | `/posts` | 必須 | 一般 | 公開記事一覧表示 |
| **ブログ詳細** | `/posts/{id}` | 必須 | 一般 | 記事詳細・コメント機能 |
| **プロフィール** | `/profile` | 必須 | 一般 | ユーザー情報管理 |
| **管理者ダッシュボード** | `/admin/dashboard` | 必須 | 管理者 | 統計情報・最近のクイズ |
| **クイズ管理** | `/admin/quizzes` | 必須 | 管理者 | CRUD操作・Soft Delete管理 |
| **記事管理** | `/admin/posts` | 必須 | 管理者 | ブログ記事CRUD・公開状態管理 |
| **ユーザー管理** | `/admin/users` | 必須 | 管理者 | ユーザー一覧・削除機能 |

## 🔧 開発のポイント

### 権限システムの実装
```php
// 3段階権限システム
class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }
        abort(403, '管理者権限が必要です。');
    }
}
```

### インタラクティブなクイズシステム
```javascript
// リアルタイムクイズ機能
document.querySelectorAll('.choice-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const isCorrect = this.dataset.isCorrect === 'true';
        // 即座の正誤判定とUI更新
        updateQuizUI(isCorrect);
    });
});
```

### トランザクション処理によるデータ整合性
```php
// クイズ作成時の安全な一括処理
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

### カスタムデザインシステム
```javascript
// Tailwind CSS カスタムカラーパレット
colors: {
    primary_main: '#197fc3',
    primary_gray: '#B0B0B0',
    primary_lighter: '#EAF2FF',
    bubble_blue: '#4A90E2',
    light_blue: '#F0F8FF',
}
```

## 🧪 テスト & 初期データ

### テスト実行
```bash
# 全テスト実行
php artisan test

# 特定テスト実行
php artisan test --filter=QuizTest

# カバレッジ付きテスト
php artisan test --coverage
```

### 初期データ（シーダー）
**管理者アカウント**:
- Email: `admin@posse.com`
- Password: `password123`
- 権限: 管理者

**テストユーザー**:
- 田中太郎 (`tanaka@example.com`)
- 佐藤花子 (`sato@example.com`)
- 山田次郎 (`yamada@example.com`)

**POSSE生ユーザー**:
- 早稲田大学 鈴木一郎 (`suzuki@waseda.jp`)
- 慶應義塾大学 高橋美咲 (`takahashi@keio.jp`)
- 明治大学 伊藤健太 (`ito@meiji.ac.jp`)

**初期クイズ**:
- 「ITクイズ」（3問）: IT人材不足、X-TECH、IoT
- ファクトリー生成: 100クイズ（各3問）

## 📈 パフォーマンス最適化

- **Eager Loading**: N+1問題の回避（`with('questions.choices')`）
- **ページネーション**: 大量データの効率的表示（6件/ページ）
- **Soft Deletes**: 物理削除を避けた安全なデータ管理
- **Vite**: 高速バンドルとホットリロード
- **CSS最適化**: Tailwind JITコンパイル
- **トランザクション処理**: データ整合性の保証

## 🔒 セキュリティ機能

- **CSRF保護**（Laravel標準）
- **SQL インジェクション対策**（Eloquent ORM）
- **XSS対策**（Blade テンプレート）
- **認証フロー**（Laravel Breeze）
- **3段階権限制御**（未認証/一般/管理者）
- **パスワードハッシング**（bcrypt）
- **セッション管理**（セキュアクッキー）

## 🎯 今後の拡張予定

- [ ] **データベース統一**: MySQL/SQLite設定の整合性確保
- [ ] **クイズカテゴリ機能**: ジャンル別クイズ分類
- [ ] **ユーザーランキングシステム**: スコアベースの順位表示
- [ ] **画像アップロード機能**: 問題・記事への画像添付
- [ ] **API エンドポイント**: モバイルアプリ対応
- [ ] **リアルタイム通知**: コメント・新クイズの通知
- [ ] **ソーシャル機能**: ユーザー間のフォロー・いいね
- [ ] **学習進捗管理**: 個人の学習履歴・統計

## 📄 ライセンス

MIT License

## 🤝 コントリビューション

いないと思うけどやってくれたらありがとう。

---

**技術スタック**: Laravel 10 | PHP 8.1 | SQLite | Docker | Tailwind CSS | Vite | Alpine.js | jQuery

**POSSEコミュニティ**: 株式会社アンチパターン運営 | 関東圏大学生150名 | プログラミング学習コミュニティ