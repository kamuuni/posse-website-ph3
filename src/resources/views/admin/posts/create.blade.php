<x-admin-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">新規記事投稿</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">タイトル</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    placeholder="記事のタイトルを入力">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">画像</label>
                <input type="file" name="image" class="border rounded w-full py-2 px-3">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">本文</label>
                <textarea name="body" rows="10"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                        placeholder="ここから自由に記事を書いてください">{{ old('body') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center cursor-pointer">
                    {{-- チェックボックスは、チェックされていないとデータが送信されない性質があります --}}
                    <input type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-blue-600">
                    <span class="ml-2 text-gray-700">すぐに公開する</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    記事を保存する
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
