<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者ダッシュボード</title>
</head>
<body>
    <h1>管理者ダッシュボード</h1>
    <p>ようこそ、{{ $user->name }}さん！ここは管理者専用のページです。</p>
    
    <nav>
        <ul>
            <li><a href="{{ route('admin.quizzes.index') }}">クイズ一覧管理</a></li>
        </ul>
    </nav>
</body>
</html>