<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-light_blue to-blue-100 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" data-total-questions="{{ $quiz->questions->count() }}">
            <!-- Header -->
            <div class="text-center mb-8">
                
                <h1 class="text-3xl md:text-4xl font-Poppins font-bold text-primary_main mb-2">
                    {{ $quiz->name }}
                </h1>
                <p class="text-gray-600 font-Inter">
                    全{{ $quiz->questions->count() }}問のクイズに挑戦しましょう
                </p>
            </div>



            <!-- Quiz Questions -->
            <div class="space-y-6">
                @foreach ($quiz->questions as $index => $question)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden question-card" data-question="{{ $index + 1 }}">
                        <!-- Question Header -->
                        <div class="bg-gradient-to-r from-primary_main to-blue-600 px-6 py-4">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-Poppins font-bold text-white">
                                    問題 {{ $index + 1 }}
                                </h3>
                                <div class="bg-white/20 rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-Inter font-medium">
                                        {{ $index + 1 }} / {{ $quiz->questions->count() }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Question Content -->
                        <div class="p-6">
                            <p class="text-lg font-Inter text-gray-800 mb-6 leading-relaxed">
                                {{ $question->text }}
                            </p>

                            <div class="mt-4 hidden feedback-message p-3 mb-4 rounded-lg font-bold text-center">
                            </div>

                            <!-- Answer Choices -->
                            <div class="space-y-3">
                                @foreach ($question->choices as $choiceIndex => $choice)
                                    <button class="choice-btn w-full text-left p-4 border-2 border-gray-200 rounded-lg hover:border-primary_main hover:bg-primary_main/5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2"
                                            data-choice="{{ $choiceIndex }}"
                                            data-is-correct="{{ $choice->is_correct ? 'true' : 'false' }}">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-8 h-8 border-2 border-gray-300 rounded-full flex items-center justify-center mr-3 choice-indicator">
                                                <span class="text-sm font-Inter font-medium text-gray-500">
                                                    {{ chr(65 + $choiceIndex) }}
                                                </span>
                                            </div>
                                            <span class="font-Inter text-gray-700">{{ $choice->text }}</span>
                                        </div>
                                    </button>
                                @endforeach
                            </div>

                            <!-- Supplement -->
                            @if ($question->supplement)
                                <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-Inter font-medium text-blue-800 mb-1">補足情報</h4>
                                            <p class="text-sm font-Inter text-blue-700">{{ $question->supplement }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Answer Button -->
                            <div class="mt-6 flex justify-end">
                                <button class="answer-btn bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-6 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed"
                                        disabled>
                                    次へ
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Results Section (Hidden initially) -->
            <div id="results-section" class="hidden bg-white rounded-2xl shadow-lg p-8 mt-8">
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-full mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-Poppins font-bold text-gray-800 mb-2">
                        クイズ完了！
                    </h2>
                    <p class="text-gray-600 font-Inter mb-6">
                        お疲れさまです！
                    </p>
                    <div class="bg-gradient-to-r from-primary_main to-blue-600 rounded-lg p-6 text-white mb-6">
                        <div class="text-3xl font-Poppins font-bold mb-2" id="score-display">
                            0 / {{ $quiz->questions->count() }}
                        </div>
                        <p class="font-Inter">正解数</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between items-center mt-8">
                <a href="{{ route('quizzes.index') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white font-Inter font-medium rounded-lg transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    クイズ一覧に戻る
                </a>

                <button id="restart-btn" 
                        class="hidden inline-flex items-center px-6 py-3 bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-medium rounded-lg transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    もう一度挑戦
                </button>
            </div>
        </div>
    </div>


</x-app-layout>