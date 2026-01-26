<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-light_blue to-blue-100 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" data-total-questions="{{ $quiz->questions->count() }}">
            <!-- Header -->
            <div class="text-center mb-8 animate-fade-in">
                <h1 class="text-3xl md:text-4xl font-Poppins font-bold text-primary_main mb-2">
                    {{ $quiz->name }}
                </h1>
                <p class="text-gray-600 font-Inter">
                    全{{ $quiz->questions->count() }}問のクイズに挑戦しましょう
                </p>
                <div class="mt-4 bg-white rounded-full px-6 py-2 inline-block shadow-md">
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        推定時間: {{ $quiz->questions->count() * 2 }}分
                    </div>
                </div>
            </div>

            <!-- Progress Bar -->
            <div class="mb-8">
                <div class="bg-white rounded-full p-1 shadow-md">
                    <div id="progress-bar" class="bg-gradient-to-r from-primary_main to-blue-600 h-2 rounded-full transition-all duration-500" style="width: 0%"></div>
                </div>
                <div class="text-center mt-2">
                    <span id="progress-text" class="text-sm font-Inter text-gray-600">0 / {{ $quiz->questions->count() }}</span>
                </div>
            </div>

            <!-- Quiz Questions -->
            <div class="space-y-6">
                @foreach ($quiz->questions as $index => $question)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden question-card animate-slide-up" 
                         data-question="{{ $index + 1 }}" 
                         style="animation-delay: {{ $index * 0.1 }}s">
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

                            <!-- Feedback Message -->
                            <div class="feedback-message hidden p-4 mb-4 rounded-lg font-bold text-center transition-all duration-300">
                            </div>

                            <!-- Answer Choices -->
                            <div class="space-y-3">
                                @foreach ($question->choices as $choiceIndex => $choice)
                                    <button class="choice-btn w-full text-left p-4 border-2 border-gray-200 rounded-lg hover:border-primary_main hover:bg-primary_main/5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2 transform hover:scale-[1.02]"
                                            data-choice="{{ $choiceIndex }}"
                                            data-is-correct="{{ $choice->is_correct ? 'true' : 'false' }}">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-8 h-8 border-2 border-gray-300 rounded-full flex items-center justify-center mr-3 choice-indicator transition-all duration-200">
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
                                <button class="answer-btn bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-semibold py-3 px-6 rounded-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary_main focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105"
                                        disabled>
                                    <span class="answer-btn-text">選択してください</span>
                                    <svg class="inline-block w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Results Section (Hidden initially) -->
            <div id="results-section" class="hidden bg-white rounded-2xl shadow-lg p-8 mt-8 animate-fade-in">
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
                        お疲れさまでした！
                    </p>
                    <div class="bg-gradient-to-r from-primary_main to-blue-600 rounded-lg p-6 text-white mb-6">
                        <div class="text-3xl font-Poppins font-bold mb-2" id="score-display">
                            0 / {{ $quiz->questions->count() }}
                        </div>
                        <p class="font-Inter">正解数</p>
                        <div class="mt-2">
                            <div class="text-sm opacity-90" id="score-percentage">0%</div>
                        </div>
                    </div>
                    <div id="score-message" class="mb-6 p-4 rounded-lg font-Inter font-medium">
                        <!-- スコアに応じたメッセージがここに表示されます -->
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between items-center mt-8">
                <a href="{{ route('quizzes.index') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white font-Inter font-medium rounded-lg transition-all duration-200 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    クイズ一覧に戻る
                </a>

                <button id="restart-btn" 
                        class="hidden inline-flex items-center px-6 py-3 bg-primary_main hover:bg-primary_main/90 text-white font-Inter font-medium rounded-lg transition-all duration-200 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    もう一度挑戦
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // クイズ機能の改善されたJavaScript
            document.addEventListener('DOMContentLoaded', function() {
                let currentScore = 0;
                let totalQuestions = parseInt(document.querySelector('[data-total-questions]').dataset.totalQuestions);
                let answeredQuestions = 0;
                
                // プログレスバー更新
                function updateProgress() {
                    const percentage = (answeredQuestions / totalQuestions) * 100;
                    document.getElementById('progress-bar').style.width = percentage + '%';
                    document.getElementById('progress-text').textContent = `${answeredQuestions} / ${totalQuestions}`;
                }
                
                // 選択肢クリック処理
                document.querySelectorAll('.choice-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const questionCard = this.closest('.question-card');
                        const choices = questionCard.querySelectorAll('.choice-btn');
                        const answerBtn = questionCard.querySelector('.answer-btn');
                        const answerBtnText = questionCard.querySelector('.answer-btn-text');
                        
                        // 他の選択肢の選択状態をリセット
                        choices.forEach(choice => {
                            choice.classList.remove('border-primary_main', 'bg-primary_main/10');
                            choice.querySelector('.choice-indicator').classList.remove('border-primary_main', 'bg-primary_main', 'text-white');
                        });
                        
                        // 選択された選択肢をハイライト
                        this.classList.add('border-primary_main', 'bg-primary_main/10');
                        const indicator = this.querySelector('.choice-indicator');
                        indicator.classList.add('border-primary_main', 'bg-primary_main', 'text-white');
                        
                        // 回答ボタンを有効化
                        answerBtn.disabled = false;
                        answerBtnText.textContent = '回答する';
                        
                        // 選択された選択肢を記録
                        questionCard.dataset.selectedChoice = this.dataset.choice;
                    });
                });
                
                // 回答ボタンクリック処理
                document.querySelectorAll('.answer-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const questionCard = this.closest('.question-card');
                        const selectedChoice = questionCard.dataset.selectedChoice;
                        const choices = questionCard.querySelectorAll('.choice-btn');
                        const feedbackMessage = questionCard.querySelector('.feedback-message');
                        
                        if (selectedChoice === undefined) return;
                        
                        let isCorrect = false;
                        
                        // 正解・不正解の表示
                        choices.forEach(choice => {
                            const isChoiceCorrect = choice.dataset.isCorrect === 'true';
                            const isSelected = choice.dataset.choice === selectedChoice;
                            
                            if (isChoiceCorrect) {
                                choice.classList.add('border-green-500', 'bg-green-50');
                                choice.querySelector('.choice-indicator').classList.add('border-green-500', 'bg-green-500', 'text-white');
                                if (isSelected) isCorrect = true;
                            } else if (isSelected) {
                                choice.classList.add('border-red-500', 'bg-red-50');
                                choice.querySelector('.choice-indicator').classList.add('border-red-500', 'bg-red-500', 'text-white');
                            }
                            
                            choice.disabled = true;
                        });
                        
                        // フィードバックメッセージ表示
                        feedbackMessage.classList.remove('hidden');
                        if (isCorrect) {
                            feedbackMessage.classList.add('bg-green-100', 'text-green-800', 'border', 'border-green-200');
                            feedbackMessage.textContent = '正解です！';
                            currentScore++;
                        } else {
                            feedbackMessage.classList.add('bg-red-100', 'text-red-800', 'border', 'border-red-200');
                            feedbackMessage.textContent = '不正解です。';
                        }
                        
                        // ボタンを無効化
                        this.disabled = true;
                        this.querySelector('.answer-btn-text').textContent = '回答済み';
                        
                        answeredQuestions++;
                        updateProgress();
                        
                        // 全問題回答済みの場合、結果を表示
                        if (answeredQuestions === totalQuestions) {
                            setTimeout(() => {
                                showResults();
                            }, 1500);
                        }
                    });
                });
                
                // 結果表示
                function showResults() {
                    const resultsSection = document.getElementById('results-section');
                    const scoreDisplay = document.getElementById('score-display');
                    const scorePercentage = document.getElementById('score-percentage');
                    const scoreMessage = document.getElementById('score-message');
                    const restartBtn = document.getElementById('restart-btn');
                    
                    const percentage = Math.round((currentScore / totalQuestions) * 100);
                    
                    scoreDisplay.textContent = `${currentScore} / ${totalQuestions}`;
                    scorePercentage.textContent = `${percentage}%`;
                    
                    // スコアに応じたメッセージ
                    if (percentage >= 90) {
                        scoreMessage.classList.add('bg-green-100', 'text-green-800');
                        scoreMessage.textContent = '素晴らしい！完璧に近い結果です！';
                    } else if (percentage >= 70) {
                        scoreMessage.classList.add('bg-blue-100', 'text-blue-800');
                        scoreMessage.textContent = 'よくできました！良い理解度です。';
                    } else if (percentage >= 50) {
                        scoreMessage.classList.add('bg-yellow-100', 'text-yellow-800');
                        scoreMessage.textContent = 'もう少し！復習して再挑戦してみましょう。';
                    } else {
                        scoreMessage.classList.add('bg-red-100', 'text-red-800');
                        scoreMessage.textContent = '基礎から復習して、再度挑戦してみましょう。';
                    }
                    
                    resultsSection.classList.remove('hidden');
                    restartBtn.classList.remove('hidden');
                    
                    // 結果セクションまでスクロール
                    resultsSection.scrollIntoView({ behavior: 'smooth' });
                }
                
                // リスタート機能
                document.getElementById('restart-btn').addEventListener('click', function() {
                    location.reload();
                });
            });
        </script>
    @endpush
</x-app-layout>