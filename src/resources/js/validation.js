// Custom validation messages in Japanese
document.addEventListener('DOMContentLoaded', function() {
    // Custom validation messages
    const validationMessages = {
        valueMissing: {
            email: 'メールアドレスを入力してください',
            password: 'パスワードを入力してください',
            name: 'お名前を入力してください',
            default: 'この項目は必須です'
        },
        typeMismatch: {
            email: '正しいメールアドレスの形式で入力してください'
        },
        tooShort: {
            password: 'パスワードは8文字以上で入力してください',
            default: '入力文字数が不足しています'
        },
        patternMismatch: {
            default: '入力形式が正しくありません'
        }
    };

    // Apply custom validation to all form inputs
    const inputs = document.querySelectorAll('input[required], input[type="email"], input[minlength]');
    
    inputs.forEach(input => {
        input.addEventListener('invalid', function(e) {
            e.preventDefault();
            
            const validity = this.validity;
            const inputType = this.type;
            const inputName = this.name;
            let message = '';

            if (validity.valueMissing) {
                message = validationMessages.valueMissing[inputName] || 
                         validationMessages.valueMissing[inputType] || 
                         validationMessages.valueMissing.default;
            } else if (validity.typeMismatch) {
                message = validationMessages.typeMismatch[inputType] || 
                         validationMessages.typeMismatch.default;
            } else if (validity.tooShort) {
                message = validationMessages.tooShort[inputName] || 
                         validationMessages.tooShort.default;
            } else if (validity.patternMismatch) {
                message = validationMessages.patternMismatch.default;
            }

            this.setCustomValidity(message);
            showCustomValidationMessage(this, message);
        });

        input.addEventListener('input', function() {
            this.setCustomValidity('');
            hideCustomValidationMessage(this);
        });
    });

    // Custom validation message display
    function showCustomValidationMessage(input, message) {
        // Remove existing error message
        hideCustomValidationMessage(input);
        
        // Create error message element
        const errorDiv = document.createElement('div');
        errorDiv.className = 'custom-validation-error mt-2 text-sm text-red-600 font-Inter flex items-center';
        errorDiv.innerHTML = `
            <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            ${message}
        `;
        
        // Insert after input
        input.parentNode.insertBefore(errorDiv, input.nextSibling);
        
        // Add error styling to input
        input.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
        input.classList.remove('border-gray-300', 'focus:border-primary_main', 'focus:ring-primary_main');
    }

    function hideCustomValidationMessage(input) {
        const errorDiv = input.parentNode.querySelector('.custom-validation-error');
        if (errorDiv) {
            errorDiv.remove();
        }
        
        // Remove error styling from input
        input.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
        input.classList.add('border-gray-300', 'focus:border-primary_main', 'focus:ring-primary_main');
    }

    // Handle form submission
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const invalidInputs = form.querySelectorAll(':invalid');
            if (invalidInputs.length > 0) {
                e.preventDefault();
                invalidInputs[0].focus();
                invalidInputs[0].reportValidity();
            }
        });
    });
});

// Password confirmation validation
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('password_confirmation');
    
    if (passwordInput && confirmPasswordInput) {
        function validatePasswordConfirmation() {
            if (confirmPasswordInput.value !== passwordInput.value) {
                confirmPasswordInput.setCustomValidity('パスワードが一致しません');
            } else {
                confirmPasswordInput.setCustomValidity('');
            }
        }
        
        passwordInput.addEventListener('input', validatePasswordConfirmation);
        confirmPasswordInput.addEventListener('input', validatePasswordConfirmation);
    }
});