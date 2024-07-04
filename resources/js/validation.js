document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Validate email
            const emailInput = form.querySelector('input[type="email"]');
            if (emailInput) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    isValid = false;
                    alert('Please enter a valid email address.');
                }
            }

            // Validate password
            const passwordInput = form.querySelector('input[type="password"]');
            if (passwordInput && passwordInput.value.length < 8) {
                isValid = false;
                alert('Password must be at least 8 characters long.');
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    });
});