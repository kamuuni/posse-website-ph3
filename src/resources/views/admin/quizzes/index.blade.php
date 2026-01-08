<div class="container">
    <h1>管理者用：クイズ一覧</h1>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.quizzes.create') }}" class="btn-create">＋ 新規クイズ作成</a>
    </div>

    @if(session('status'))
        <div class="alert-success">{{ session('status') }}</div>
    @endif

    <table border="1" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f3f3f3;">
                <th>ID</th>
                <th>クイズ名</th>
                <th>登録日</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
                <tr>
                    <td>{{ $quiz->id }}</td>
                    <td>{{ $quiz->name }}</td>
                    <td>{{ $quiz->created_at->format('Y/m/d') }}</td>
                    <td>
                        <a href="{{ route('admin.quizzes.edit', $quiz) }}">編集</a>
                        
                        <form action="{{ route('admin.quizzes.destroy', $quiz) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>