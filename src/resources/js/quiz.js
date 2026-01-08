// Quiz functionality
document.addEventListener('DOMContentLoaded', function() {
    // Only run on quiz show pages
    if (!document.querySelector('.question-card')) {
        return;
    }

    let currentQuestion = 0;
    let score = 0;
    let selectedAnswers = {};
    const totalQuestions = parseInt(document.querySelector('[data-total-questions]')?.dataset.totalQuestions) || 0;
    
    // Show only first question initially
    showQuestion(0);
    
    function showQuestion(index) {
        const questions = document.querySelectorAll('.question-card');
        questions.forEach((q, i) => {
            q.style.display = i === index ? 'block' : 'none';
        });
    }
    
    // Handle choice selection
    document.querySelectorAll('.choice-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const questionCard = this.closest('.question-card');
            const questionIndex = parseInt(questionCard.dataset.question) - 1;
            const feedback = questionCard.querySelector('.feedback-message');

            // 1. ロック処理
            const allButtons = questionCard.querySelectorAll('.choice-btn');
            allButtons.forEach(b => {
                b.disabled = true;
                b.style.cursor = 'not-allowed';
            });

            // 2. 正誤判定（ここで一回だけ宣言！）
            const isCorrect = this.dataset.isCorrect === 'true';
            selectedAnswers[questionIndex] = isCorrect;

            // 3. 演出用の要素を取得（これを足さないとエラーになります！）
            const indicator = this.querySelector('.choice-indicator');
            const label = indicator.querySelector('span');
            
            // 4. 正誤に応じたスタイル適用
            if (isCorrect) {
                this.classList.add('border-green-500', 'bg-green-50');
                feedback.textContent = "正解！！天才！！";
                feedback.classList.remove('hidden', 'bg-red-100', 'text-red-700'); // 不正解の色を消す
                feedback.classList.add('bg-green-100', 'text-green-700'); // 正解の色をつける
                indicator.classList.add('bg-green-500', 'border-green-500');
                label.classList.replace('text-gray-500', 'text-white');
            } else {
                this.classList.add('border-red-500', 'bg-red-50');
                feedback.textContent = "不正解...バーカ！";
                feedback.classList.remove('hidden', 'bg-green-100', 'text-green-700'); // 不正解の色を消す
                feedback.classList.add('bg-red-100', 'text-red-700'); // 正解の色をつける
                indicator.classList.add('bg-red-500', 'border-red-500');
                label.classList.replace('text-gray-500', 'text-white');
            }

            // 5. 次へ進むボタンを有効化
            questionCard.querySelector('.answer-btn').disabled = false;
        });
    });
    
    // Handle answer submission
    document.querySelectorAll('.answer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            currentQuestion++;
            
            if (currentQuestion < totalQuestions) {
                showQuestion(currentQuestion);
            } else {
                // --- 4. 全問終了！スコアを集計する ---
                // selectedAnswers は {0: true, 1: false, 2: true} みたいになっている
                score = Object.values(selectedAnswers).filter(val => val === true).length;
                showResults();
            }
        });
    });

    
    
    function showResults() {
        document.querySelectorAll('.question-card').forEach(q => q.style.display = 'none');
        const resultsSection = document.getElementById('results-section');
        const restartBtn = document.getElementById('restart-btn');
        const scoreDisplay = document.getElementById('score-display');
        
        if (resultsSection) resultsSection.classList.remove('hidden');
        if (restartBtn) restartBtn.classList.remove('hidden');
        if (scoreDisplay) scoreDisplay.textContent = score + ' / ' + totalQuestions;
    }
    
    // Restart quiz
    const restartBtn = document.getElementById('restart-btn');
    if (restartBtn) {
        restartBtn.addEventListener('click', function() {
            location.reload(); // 一番シンプルで確実な「さぼりリセット術」
        });
    }
});