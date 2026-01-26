<x-admin-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">記事の編集</h1>

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- これを忘れるとエラーになります --}}

            <div class="mb-4">
                <label class="block font-bold">タイトル</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" class="border rounded w-full py-2 px-3">
            </div>

            <div class="mb-4">
                <label class="block font-bold">本文</label>
                <textarea name="body" rows="10" class="border rounded w-full py-2 px-3">{{ old('body', $post->body) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-bold">現在の画像</label>
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="w-40 mb-2">
                @endif
                <input type="file" name="image" class="border rounded w-full py-2 px-3">
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post->is_published) ? 'checked' : '' }} class="form-checkbox">
                    <span class="ml-2">公開する</span>
                </label>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">更新する</button>
        </form>
    </div>
</x-admin-layout>
