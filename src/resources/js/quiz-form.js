document.addEventListener('DOMContentLoaded', () => {
    // 1. 必要なパーツ（要素）を捕まえる
    const container = document.getElementById('questions-container');
    const addButton = document.getElementById('add-question-btn');

    // ガード節：もしボタンがない画面なら、何もしない（エラー防止）
    if (!addButton || !container) return;

    // 2. 現在の設問数をカウント（初期状態の HTML の数を数える）
    let questionCount = container.querySelectorAll('.question').length;

    addButton.addEventListener('click', () => {
        // 3. 【ブレーキ】10問制限
        if (questionCount >= 10) {
            alert('クイズは最大10問までです！');
            return;
        }

        // 4. 次のインデックス番号を決定（0から始まる配列用）
        const index = questionCount;
        questionCount++; // 表示用のカウントを増やす

        // 5. 【複製】追加するHTMLの設計図（新しいデザインに対応）
        const html = `
            <div class="question mt-6 border border-gray-200 rounded-lg p-6 bg-gray-50">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-lg font-semibold text-gray-900">問題 ${questionCount}</h4>
                    <button type="button" class="remove-question text-red-600 hover:text-red-800 text-sm font-medium">
                        削除
                    </button>
                </div>

                <!-- 問題文 -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        問題文 <span class="text-red-500">*</span>
                    </label>
                    <textarea name="questions[${index}][text]"
                              placeholder="問題を入力してください"
                              rows="3"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                              required></textarea>
                </div>

                <!-- 選択肢 -->
                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700">
                        選択肢 <span class="text-red-500">*</span>
                    </label>
                    ${[0, 1, 2].map(i => `
                        <div class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg bg-white">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-gray-100 text-sm font-medium text-gray-500">
                                    ${String.fromCharCode(65 + i)}
                                </span>
                            </div>
                            <input type="text" 
                                   name="questions[${index}][choices][${i}][text]"
                                   placeholder="選択肢 ${i + 1}"
                                   class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                   required>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="radio" 
                                       name="questions[${index}][correct_index]" 
                                       value="${i}"
                                       ${i === 0 ? 'checked' : ''}
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                <span class="text-sm font-medium text-gray-700">正解</span>
                            </label>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;

        // 6. 【合体】コンテナの最後に追加
        addButton.closest('.mt-6').insertAdjacentHTML('beforebegin', html);

        // 7. 削除ボタンのイベントリスナーを追加
        const newQuestion = container.querySelector('.question:last-of-type');
        const removeButton = newQuestion.querySelector('.remove-question');
        
        removeButton.addEventListener('click', () => {
            if (confirm('この問題を削除しますか？')) {
                newQuestion.remove();
                questionCount--;
                updateQuestionNumbers();
            }
        });
    });

    // 問題番号を更新する関数
    function updateQuestionNumbers() {
        const questions = container.querySelectorAll('.question');
        questions.forEach((question, index) => {
            const title = question.querySelector('h4');
            if (title) {
                title.textContent = `問題 ${index + 1}`;
            }
        });
    }

    // 既存の削除ボタンにもイベントリスナーを追加（編集画面用）
    document.querySelectorAll('.remove-question').forEach(button => {
        button.addEventListener('click', (e) => {
            if (confirm('この問題を削除しますか？')) {
                e.target.closest('.question').remove();
                questionCount--;
                updateQuestionNumbers();
            }
        });
    });
});
