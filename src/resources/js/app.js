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
