import './bootstrap';
import './validation';
import './quiz';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Dialog functionality
document.addEventListener('DOMContentLoaded', function() {
    // Function to setup dialog
    function setupDialog(dialogNumber) {
        const openButton = document.getElementById(`open-dialog-${dialogNumber}`);
        const closeButton = document.getElementById(`close-dialog-${dialogNumber}`);
        const dialog = document.getElementById(`dialog-${dialogNumber}`);

        if (openButton && dialog) {
            openButton.addEventListener('click', function() {
                dialog.showModal();
            });
        }

        if (closeButton && dialog) {
            closeButton.addEventListener('click', function() {
                dialog.close();
            });
        }

        // Close dialog when clicking outside
        if (dialog) {
            dialog.addEventListener('click', function(e) {
                if (e.target === dialog) {
                    dialog.close();
                }
            });
        }
    }

    // Setup dialogs 01-06
    for (let i = 1; i <= 6; i++) {
        setupDialog(String(i).padStart(2, '0'));
    }

    // Slider is now handled by CSS animations
    // No JavaScript needed for the infinite slider
});


document.addEventListener('DOMContentLoaded', () => {
    // 1. 必要な要素をまとめて取得
    const deleteModal = document.getElementById('delete-modal');
    const modalNameSpan = document.getElementById('modal-quiz-name');
    const deleteButtons = document.querySelectorAll('.js-open-delete-modal');
    const closeButtons = document.querySelectorAll('.js-close-modal'); // モーダル内の閉じるボタン用

    // ガード：このページに削除ボタンがなければ何もしない（エラー防止）
    if (deleteButtons.length === 0) return;

    // 2. 各ボタンに「クリックされた時の動き」を登録する
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
            // data属性から値を取得（ここがスマート！）
            const id = button.dataset.id;
            const name = button.dataset.name;

            // モーダルの内容を書き換えて表示
            modalNameSpan.innerText = name;
            window.currentDeleteTargetId = id; // 送信用にIDを保持
            deleteModal.classList.remove('hidden');
        });
    });

    // 3. 閉じる処理もJS側で一括管理
    closeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            deleteModal.classList.add('hidden');
        });
    });
});

// 実行処理（ここはonclickのままでもいいけど、一貫性を持たせるなら同様に書けるよ）
window.executeDelete = function() {
    const id = window.currentDeleteTargetId;
    if (id) {
        document.getElementById(`delete-form-${id}`).submit();
    }
};
