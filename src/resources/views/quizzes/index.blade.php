<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-light_blue to-blue-100 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-Poppins font-bold text-primary_main mb-4">
                    POSSEクイズ
                </h1>
                <p class="text-lg text-gray-600 font-Inter max-w-2xl mx-auto">
                    プログラミングやIT知識を楽しく学べるクイズに挑戦しよう！
                </p>
            </div>

            <!-- Quiz Categories -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @forelse($quizzes as $quiz)
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden animate-slide-up">
                        <div class="bg-gradient-to-r from-primary_main to-blue-600 p-6">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-Poppins font-bold text-white">
                                    {{ $quiz->name }}
                                </h3>
                                <div class="bg-white/20 rounded-full p-2">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <p class="text-gray-600 font-Inter text-sm mb-4">
                                {{ $quiz->name }}に関する問題に挑戦して、あなたの知識をテストしましょう。
                            </p>
                            
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    約{{ $quiz->questions_count * 2 ?? 20 }}分
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $quiz->questions_count ?? '10' }}問
                                </div>
                            </div>
                            
                            <a href="{{ route('quizzes.show', $quiz->id) }}" 
                               class="block w-full text-center bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-4 rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2 transform hover:scale-105">
                                クイズを始める
                                <svg class="inline-block w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="bg-white rounded-2xl shadow-lg p-12 text-center animate-fade-in">
                            <div class="mb-6">
                                <svg class="w-16 h-16 text-gray-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-Poppins font-bold text-gray-700 mb-2">
                                クイズが見つかりません
                            </h3>
                            <p class="text-gray-500 font-Inter">
                                現在利用可能なクイズがありません。<br>
                                新しいクイズが追加されるまでお待ちください。
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($quizzes->hasPages())
                <div class="flex justify-center mb-8">
                    <div class="bg-white rounded-2xl shadow-lg px-6 py-4">
                        <nav class="flex items-center space-x-2">
                            {{-- Previous Page Link --}}
                            @if ($quizzes->onFirstPage())
                                <span class="px-3 py-2 text-sm font-Inter text-gray-400 cursor-not-allowed">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </span>
                            @else
                                <a href="{{ $quizzes->previousPageUrl() }}" class="px-3 py-2 text-sm font-Inter text-gray-600 hover:text-primary_main hover:bg-primary_main/10 rounded-lg transition-colors duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </a>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($quizzes->getUrlRange(1, $quizzes->lastPage()) as $page => $url)
                                @if ($page == $quizzes->currentPage())
                                    <span class="px-4 py-2 text-sm font-Inter font-semibold text-white bg-primary_main rounded-lg">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="px-4 py-2 text-sm font-Inter text-gray-600 hover:text-primary_main hover:bg-primary_main/10 rounded-lg transition-colors duration-200">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($quizzes->hasMorePages())
                                <a href="{{ $quizzes->nextPageUrl() }}" class="px-3 py-2 text-sm font-Inter text-gray-600 hover:text-primary_main hover:bg-primary_main/10 rounded-lg transition-colors duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            @else
                                <span class="px-3 py-2 text-sm font-Inter text-gray-400 cursor-not-allowed">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            @endif
                        </nav>
                        
                        {{-- Page Info --}}
                        <div class="text-center mt-3 text-sm font-Inter text-gray-500">
                            {{ $quizzes->firstItem() }}〜{{ $quizzes->lastItem() }}件 / 全{{ $quizzes->total() }}件
                        </div>
                    </div>
                </div>
            @endif

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