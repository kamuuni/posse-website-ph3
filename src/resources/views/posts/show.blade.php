<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-light_blue to-blue-100 py-8">
        <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Article Header -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8 animate-fade-in">
                <h1 class="text-3xl md:text-4xl font-Poppins font-bold text-gray-900 mb-6 leading-tight">
                    {{ $post->title }}
                </h1>

                <!-- Meta Information -->
                <div class="flex items-center justify-between text-gray-500 text-sm mb-6 pb-6 border-b border-gray-200">
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-primary_main rounded-full flex items-center justify-center mr-3">
                                <span class="text-white text-sm font-medium">
                                    {{ substr($post->user->name ?? 'U', 0, 1) }}
                                </span>
                            </div>
                            <div>
                                <p class="font-Inter font-semibold text-gray-700">
                                    {{ $post->user->name ?? 'Unknown' }}
                                </p>
                                <p class="text-xs text-gray-500">投稿者</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <time datetime="{{ $post->created_at }}" class="font-Inter">
                            {{ $post->created_at->format('Y年m月d日') }}
                        </time>
                    </div>
                </div>

                <!-- Featured Image -->
                @if ($post->image)
                    <div class="mb-8 rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             alt="{{ $post->title }}" 
                             class="w-full h-auto object-cover">
                    </div>
                @endif

                <!-- Article Content -->
                <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed font-Inter">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white rounded-2xl shadow-lg p-8 animate-slide-up">
                <h3 class="text-2xl font-Poppins font-bold mb-6 text-gray-900 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-primary_main" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    コメント ({{ $post->comments->count() }})
                </h3>

                <!-- Comments List -->
                <div class="space-y-6 mb-8">
                    @forelse($post->comments as $comment)
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary_main rounded-full flex items-center justify-center mr-3">
                                        <span class="text-white text-sm font-medium">
                                            {{ substr($comment->user->name, 0, 1) }}
                                        </span>
                                    </div>
                                    <span class="font-Inter font-semibold text-gray-800">{{ $comment->user->name }}</span>
                                </div>
                                <span class="text-sm text-gray-500 font-Inter">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-gray-700 font-Inter leading-relaxed">{{ $comment->body }}</p>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <p class="text-gray-500 font-Inter">まだコメントはありません。<br>一番乗りで投稿してみましょう！</p>
                        </div>
                    @endforelse
                </div>

                <!-- Comment Form -->
                @auth
                    <div class="border-t border-gray-200 pt-6">
                        <h4 class="text-lg font-Poppins font-semibold mb-4 text-gray-800">コメントを投稿</h4>
                        <form action="{{ route('comments.store', $post) }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <textarea name="body" 
                                          rows="4" 
                                          class="w-full border-gray-300 rounded-lg focus:ring-primary_main focus:border-primary_main font-Inter" 
                                          placeholder="コメントを入力してください..."></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" 
                                        class="inline-flex items-center px-6 py-3 bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold rounded-lg transition-all duration-200 transform hover:scale-105">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    コメントを投稿
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="border-t border-gray-200 pt-6">
                        <div class="text-center py-6 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <p class="text-gray-600 font-Inter">
                                コメントするには 
                                <a href="{{ route('login') }}" class="text-primary_main hover:text-primary_main/80 font-semibold">ログイン</a> 
                                が必要です。
                            </p>
                        </div>
                    </div>
                @endauth
            </div>

            <!-- Navigation -->
            <div class="mt-8 flex justify-between items-center">
                <a href="{{ route('posts.index') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white font-Inter font-medium rounded-lg transition-all duration-200 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    記事一覧に戻る
                </a>
            </div>
        </article>
    </div>
</x-app-layout>