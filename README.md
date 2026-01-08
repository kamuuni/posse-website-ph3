# 🎯 Interactive Quiz Platform

**Laravel 10 + Docker による本格的なクイズWebアプリケーション**

エンタープライズレベルのPHPフレームワークLaravelと最新のフロントエンド技術を組み合わせて構築した、インタラクティブなクイズプラットフォームです。ユーザー認証、管理者機能、リアルタイムクイズ実行機能を備えた実用的なWebアプリケーションです。

## ✨ 主な機能

### 🔐 認証・認可システム
- **Laravel Breeze** による完全な認証フロー（登録・ログイン・パスワードリセット・メール認証）
- **カスタム管理者権限システム** - 独自ミドルウェアによる柔軟な権限制御
- **セキュアなセッション管理** - CSRF保護、パスワードハッシング

### 🎮 インタラクティブクイズ機能
- **リアルタイム3択クイズ** - JavaScript による即座の正誤判定
- **スコア集計システム** - 全問終了後の結果表示
- **視覚的フィードバック** - 正解・不正解の色分け表示
- **補足情報表示** - 問題に関する追加説明機能

### 👨‍💼 管理者機能
- **クイズ管理CRUD** - 作成・編集・削除の完全な管理機能
- **トランザクション処理** - 複雑なデータ関係の安全な一括作成
- **管理者ダッシュボード** - 統計情報とシステム管理
- **権限ベースアクセス制御** - 管理者のみアクセス可能な保護されたルート

### 🎨 フロントエンド技術
- **Tailwind CSS 3** - カスタムデザインシステム
- **レスポンシブデザイン** - モバイル・タブレット・デスクトップ対応
- **カスタムアニメーション** - fade-in、slide-up等のスムーズな動作
- **多言語フォント対応** - Inter、Poppins、Noto Sans JP

## 🛠️ 技術スタック

### バックエンド
- **Laravel 10** - PHP 8.1+
- **MySQL 8.0** - リレーショナルデータベース
- **Laravel Sanctum** - API認証
- **Pest** - 次世代テストフレームワーク

### フロントエンド
- **Vite** - 高速ビルドツール
- **Tailwind CSS 3** - ユーティリティファーストCSS
- **Alpine.js** - 軽量リアクティブフレームワーク
- **jQuery + Slick Carousel** - インタラクティブ要素

### インフラ・開発環境
- **Docker Compose** - マルチコンテナ開発環境
- **Nginx** - 高性能Webサーバー
- **phpMyAdmin** - データベース管理ツール
- **Node.js 18** - フロントエンドビルド環境

## 🏗️ アーキテクチャ

### データベース設計
```
users (認証 + 管理者フラグ)
├── id, name, email, password, is_admin, email_verified_at
│
quizzes (クイズセット)
├── id, name, created_at, updated_at
│
questions (設問)
├── id, quiz_id, text, image, supplement
│
choices (選択肢)
├── id, question_id, text, is_correct
```

### Docker構成
- **app**: PHP 8.1 + Laravel実行環境
- **node**: Node.js 18 フロントエンドビルド
- **web**: Nginx Webサーバー
- **mysql**: MySQL 8.0 データベース
- **phpmyadmin**: DB管理インターフェース

## 🚀 セットアップ & 起動

### 1. 環境構築
```bash
# リポジトリクローン
git clone <repository-url>
cd quiz-platform

# Docker環境構築
docker compose build --no-cache
docker compose up -d
```

### 2. Laravel セットアップ
```bash
# アプリケーションコンテナに入る
docker compose exec app sh

# 依存関係インストール
composer install

# 環境設定
cp .env.example .env
php artisan key:generate

# データベースマイグレーション
php artisan migrate

# シーダー実行（サンプルデータ）
php artisan db:seed
```

### 3. フロントエンド セットアップ
```bash
# Node.jsコンテナに入る
docker compose exec node sh

# 依存関係インストール
npm install

# 開発用ビルド（ホットリロード）
npm run dev

# または本番用ビルド
npm run build
```

### 4. アクセス確認
- **メインサイト**: http://localhost
- **phpMyAdmin**: http://localhost:1234
- **Vite開発サーバー**: http://localhost:5173

## 📱 主要ページ

| ページ | URL | 説明 |
|--------|-----|------|
| ホーム | `/` | ランディングページ |
| クイズ一覧 | `/quizzes` | 利用可能なクイズ表示 |
| クイズ実行 | `/quizzes/{id}` | インタラクティブクイズ |
| プロフィール | `/profile` | ユーザー情報管理 |
| 管理者ダッシュボード | `/admin/dashboard` | 管理者専用ページ |
| クイズ管理 | `/admin/quizzes` | CRUD操作 |

## 🔧 開発のポイント

### エンタープライズレベルの実装
```php
// 管理者権限チェック
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

### インタラクティブなフロントエンド
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

### 最新フロントエンド技術
```javascript
// カスタムカラーパレット
colors: {
    primary_main: '#197fc3',
    primary_gray: '#B0B0B0',
    primary_lighter: '#EAF2FF',
    // ...
}
```

## 🧪 テスト

```bash
# 全テスト実行
php artisan test

# 特定テスト実行
php artisan test --filter=QuizTest

# カバレッジ付きテスト
php artisan test --coverage
```

## 📈 パフォーマンス最適化

- **Eager Loading**: N+1問題の回避
- **ページネーション**: 大量データの効率的表示
- **Vite**: 高速バンドルとホットリロード
- **CSS最適化**: Tailwind JITコンパイル

## 🔒 セキュリティ機能

- CSRF保護（Laravel標準）
- SQL インジェクション対策（Eloquent ORM）
- XSS対策（Blade テンプレート）
- 認証フロー（Laravel Breeze）
- 権限ベースアクセス制御

## 🎯 今後の拡張予定

- [ ] クイズカテゴリ機能
- [ ] ユーザーランキングシステム
- [ ] 画像アップロード機能
- [ ] API エンドポイント
- [ ] リアルタイム通知

## 📄 ライセンス

MIT License

## 🤝 コントリビューション

プルリクエストやイシューの報告を歓迎します。開発に参加される場合は、まずイシューを作成してディスカッションしてください。

---

**技術スタック**: Laravel 10 | PHP 8.1 | MySQL 8.0 | Docker | Tailwind CSS | Vite | Alpine.js
