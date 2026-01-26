<x-app-layout>
    <article class="max-w-4xl mx-auto px-4 py-12">
        {{-- 1. タイトル --}}
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6 leading-tight">
            {{ $post->title }}
        </h1>

        {{-- 2. メタ情報（日付 ＋ 投稿者） --}}
        <div class="flex items-center justify-between text-gray-500 text-sm mb-8 border-b pb-4">
            <div class="flex items-center space-x-4">
                <time datetime="{{ $post->created_at }}">
                    Published on {{ $post->created_at->format('M d, Y') }}
                </time>
                <span class="text-gray-300">|</span>
                <span class="font-semibold text-gray-700">
                    By: {{ $post->user->name ?? 'Unknown' }}
                </span>
            </div>
        </div>

        {{-- 3. メイン画像 --}}
        @if ($post->image)
            <div class="mb-10 rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto">
            </div>
        @endif

        {{-- 4. 本文 --}}
        <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! nl2br(e($post->body)) !!}
        </div>

        <section class="mt-12 pt-8 border-t">
            <h3 class="text-2xl font-bold mb-6">Comments</h3>

            {{-- コメント一覧 --}}
            <div class="space-y-6 mb-10">
                @forelse($post->comments as $comment)
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex justify-between mb-2 text-sm">
                            <span class="font-bold">{{ $comment->user->name }}</span>
                            <span class="text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="text-gray-700">{{ $comment->body }}</p>
                    </div>
                @empty
                    <p class="text-gray-500">まだコメントはありません。一番乗りで投稿してみましょう！</p>
                @endforelse
            </div>

            {{-- 投稿フォーム（ログイン中のみ表示） --}}
            @auth
                <form action="{{ route('comments.store', $post) }}" method="POST" class="bg-white p-6 rounded-lg shadow-sm border">
                    @csrf
                    <textarea name="body" rows="3" class="w-full border-gray-300 rounded-md focus:ring-blue-500" placeholder="コメントを入力..."></textarea>
                    <button type="submit" class="mt-3 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Post Comment
                    </button>
                </form>
            @else
                <p class="text-center py-4 bg-gray-100 rounded">
                    コメントするには <a href="{{ route('login') }}" class="text-blue-600 underline">ログイン</a> が必要です。
                </p>
            @endauth
        </section>

        {{-- 5. フッター（戻るリンク） --}}
        <div class="mt-16 pt-8 border-t border-gray-100">
            <a href="{{ route('posts.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to all posts
            </a>
        </div>
    </article>
</x-app-layout>
