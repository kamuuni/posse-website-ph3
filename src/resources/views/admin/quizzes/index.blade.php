<x-admin-layout>
    <div class="container">
        <h1>クイズ一覧</h1>

        <div style="margin-bottom: 20px;">
            <a href=" {{ route('admin.quizzes.create') }}" class="btn-create text-blue-600 hover:text-blue-800 underline">＋ 新規クイズ作成</a>
        </div>

        @if(session('status'))
            <div class="alert-success">{{ session('status') }}</div>
        @endif
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <table border="1" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: black;">
                    <th>ID</th>
                    <th>クイズ名</th>
                    <th>登録日</th>
                    <th>内容</th>
                    <th>操作</th>
                    <th>状態</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->id }}</td>
                        <td>{{ $quiz->name }}</td>
                        <td>{{ $quiz->created_at->format('Y/m/d') }}</td>
                        <td>
                            <div x-data="{ open: false }">
                                <button @click="open = !open" class="text-sm blue-500 underline">
                                    見る
                                </button>
                                <div x-show="open" x-transition class="mt-2 text-sm bg-yellow-50 p-2 rounded">
                                    <ul class="list-disc ml-4">
                                        @foreach($quiz->questions as $question)
                                            <div class="mb-4 last:mb-0 pb-2 border-b last:border-0 border-gray-100">
                                                <p class="font-bold text-gray-700 text-sm">
                                                    Q. {{ $question->text }}
                                                </p>

                                                {{-- ② 第二のループ：選択肢（Choices） --}}
                                                <ul class="mt-1 ml-4 list-disc list-inside">
                                                    @foreach($question->choices as $choice)
                                                        <li class="text-xs {{ $choice->is_correct ? 'text-green-600 font-bold' : 'text-gray-500' }}">
                                                            {{ $choice->text }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('admin.quizzes.edit', $quiz) }}" class="text-green-600 hover:underline ml-4">編集</a>

                            <button type="button"
                                    class="js-open-delete-modal text-red-600 hover:underline ml-4"
                                    data-id="{{ $quiz->id }}"
                                    data-name="{{ $quiz->name }}">
                                削除
                            </button>
                            <form id="delete-form-{{ $quiz->id }}"
                                action="{{ route('admin.quizzes.destroy', $quiz) }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                        <td>
                            @if($quiz->trashed())
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2 py-0.5 rounded border border-gray-400 ml-2">
                                    削除済み
                                </span>
                            @else
                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded border border-green-400 ml-2">
                                    公開中
                                </span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <x-delete-modal />
    </div>
</x-admin-layout>
