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

        // 5. 【複製】追加するHTMLの設計図（テンプレートリテラル）
        const html = `
            <div class="question mt-8 p-4 border-t-2 border-gray-200">
                <p class="font-bold text-lg mb-2">設問 ${questionCount}</p>

                <label class="block text-sm font-medium text-gray-700">問題文</label>
                <input type="text" name="questions[${index}][text]"
                       class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm" required
                       placeholder="問題を入力"
                       >

                <div class="choices mt-4 ml-6">
                    ${[0, 1, 2].map(i => `
                        <div class="flex items-center mt-2">
                            <input type="text" name="questions[${index}][choices][${i}][text]"
                                   placeholder="選択肢 ${i + 1}"
                                   class="text-black mr-2 block w-full border-gray-300 rounded-md shadow-sm" required>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="questions[${index}][correct_index]" value="${i}"
                                       ${i === 0 ? 'checked' : ''} class="text-indigo-600">
                                <span class="text-sm text-gray-600 whitespace-nowrap">正解</span>
                            </label>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;

        // 6. 【合体】コンテナの最後に追加
        addButton.insertAdjacentHTML('beforebegin', html);
    });
});
