<x-admin-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">記事一覧</h1>
            <a href="{{ route('admin.posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                新規投稿
            </a>
        </div>

        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">タイトル</th>
                        <th class="py-3 px-6 text-left">投稿者</th> {{-- ← 追加 --}}
                        <th class="py-3 px-6 text-left">画像</th>
                        <th class="py-3 px-6 text-center">作成日</th>
                        <th class="py-3 px-6 text-center">アクション</th>
                        <th class="py-3 px-6 text-center">状態</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($posts as $post)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                {{ $post->id }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-medium">{{ $post->title }}</span>
                            </td>
                            {{-- ↓ 追加: 投稿者名を表示 --}}
                            <td class="py-3 px-6 text-left">
                                <span class="bg-purple-100 text-blue-600 py-1 px-3 rounded-full text-xs font-semibold">
                                    {{ $post->user->name ?? '不明' }}
                                </span>
                            </td>
                            <td class="py-3 px-6 text-left flex">
                                @if ($post->image)
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="thumbnail"
                                            class="w-20 h-12 object-cover rounded-md shadow-sm border border-gray-100">
                                    </div>
                                @else
                                    <div class="w-20 h-12 bg-gray-100 rounded-md flex items-center justify-center text-gray-400 text-xs">
                                        No Image
                                    </div>
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{ $post->created_at->format('Y/m/d H:i') }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="mr-2 text-blue-500 hover:text-blue-700 font-bold">
                                        編集
                                    </a>
                                    {{-- ここに後で削除ボタンを置くイメージですね --}}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                @if ($post->is_published)
                                    <span class="bg-green-200 text-green-700 py-1 px-3 rounded-full text-xs">公開中</span>
                                @else
                                    <span class="bg-gray-200 text-gray-700 py-1 px-3 rounded-full text-xs">非公開</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
