<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-light_blue to-blue-100 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-Poppins font-bold text-primary_main mb-4">
                    POSSEブログ
                </h1>
                <p class="text-lg text-gray-600 font-Inter max-w-2xl mx-auto">
                    プログラミング学習やコミュニティの最新情報をお届けします
                </p>
            </div>

            <!-- Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @forelse ($posts as $post)
                    <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden animate-slide-up">
                        @if ($post->image)
                            <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" 
                                     alt="{{ $post->title }}"
                                     class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
                            </div>
                        @else
                            <div class="h-48 bg-gradient-to-r from-primary_main to-blue-600 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path>
                                </svg>
                            </div>
                        @endif

                        <div class="p-6 flex-grow">
                            <h2 class="text-xl font-Poppins font-bold mb-3 text-gray-800 line-clamp-2">
                                <a href="{{ route('posts.show', $post->id) }}" 
                                   class="hover:text-primary_main transition-colors duration-200">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="text-gray-600 font-Inter text-sm mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($post->body), 120) }}
                            </p>
                            
                            <!-- Read More Button -->
                            <a href="{{ route('posts.show', $post->id) }}" 
                               class="inline-flex items-center text-primary_main hover:text-primary_main/80 font-Inter font-medium text-sm transition-colors duration-200">
                                続きを読む
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Post Meta -->
                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary_main rounded-full flex items-center justify-center mr-3">
                                        <span class="text-white text-sm font-medium">
                                            {{ substr($post->user->name ?? 'U', 0, 1) }}
                                        </span>
                                    </div>
                                    <span class="text-sm font-Inter font-medium text-gray-700">
                                        {{ $post->user->name ?? 'Unknown' }}
                                    </span>
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $post->created_at->format('Y年m月d日') }}
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full">
                        <div class="bg-white rounded-2xl shadow-lg p-12 text-center animate-fade-in">
                            <div class="mb-6">
                                <svg class="w-16 h-16 text-gray-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-Poppins font-bold text-gray-700 mb-2">
                                記事がありません
                            </h3>
                            <p class="text-gray-500 font-Inter">
                                現在公開されている記事がありません。<br>
                                新しい記事が投稿されるまでお待ちください。
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Back to Home Button -->
            <div class="text-center">
                <a href="{{ url('/') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white font-Inter font-medium rounded-lg transition-all duration-200 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    ホームに戻る
                </a>
            </div>
        </div>
    </div>
</x-app-layout>