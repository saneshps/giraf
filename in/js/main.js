//Swiper slider
if (typeof Swiper !== 'undefined') {
    var thumbsEl = document.querySelector('.bg-slider-thumbs');
    var sliderEl = document.querySelector('.bg-slider');

    if (thumbsEl && sliderEl) {
        var swiper = new Swiper('.bg-slider-thumbs', {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 0,
        });
        var swiper2 = new Swiper('.bg-slider', {
            loop: true,
            spaceBetween: 0,
            thumbs: {
                swiper: swiper,
            },
            autoplay: {
                delay: 15000,
                disableOnInteraction: false,
            },
        });
    }

    var menuButton = document.querySelector('.menu-button');
    var menuSwiperEl = document.querySelector('.swiper');

    if (menuButton && menuSwiperEl) {
        var openMenu = function () {
            menuSwiper.slidePrev();
        };
        var menuSwiper = new Swiper('.swiper', {
            slidesPerView: 'auto',
            initialSlide: 1,
            resistanceRatio: 0,
            slideToClickedSlide: true,
            on: {
                slideChangeTransitionStart: function () {
                    var slider = this;
                    if (slider.activeIndex === 0) {
                        menuButton.classList.add('cross');
                        menuButton.removeEventListener('click', openMenu, true);
                    } else {
                        menuButton.classList.remove('cross');
                    }
                },
                slideChangeTransitionEnd: function () {
                    var slider = this;
                    if (slider.activeIndex === 1) {
                        menuButton.addEventListener('click', openMenu, true);
                    }
                },
            },
        });
    }
}

// CTA contact form validation
(function () {
    var form = document.getElementById('cta_contact_form');
    if (!form) return;

    var nameInput = document.getElementById('cta_name');
    var emailInput = document.getElementById('cta_email');
    var phoneInput = document.getElementById('cta_phone');

    var nameError = document.getElementById('cta_name_error');
    var emailError = document.getElementById('cta_email_error');
    var phoneError = document.getElementById('cta_phone_error');

    if (!nameInput || !emailInput || !phoneInput) return;

    var namePattern = /^[A-Za-zÀ-ÖØ-öø-ÿ\s.'\-&,/]+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    function setError(input, errorEl, message) {
        var field = input.closest('.cta-field');
        if (field) field.classList.add('is-invalid');
        input.setAttribute('aria-invalid', 'true');
        if (errorEl) errorEl.textContent = message;
    }

    function clearError(input, errorEl) {
        var field = input.closest('.cta-field');
        if (field) field.classList.remove('is-invalid');
        input.removeAttribute('aria-invalid');
        if (errorEl) errorEl.textContent = '';
    }

    function validateName() {
        var value = nameInput.value.trim();

        if (!value || !namePattern.test(value) || /\d/.test(value)) {
            setError(nameInput, nameError, 'Please enter your full name.');
            return false;
        }

        clearError(nameInput, nameError);
        return true;
    }

    function validateEmail() {
        var value = emailInput.value.trim();

        if (!value || !emailPattern.test(value)) {
            setError(emailInput, emailError, 'Please enter a valid email address.');
            return false;
        }

        clearError(emailInput, emailError);
        return true;
    }

    function validatePhone() {
        var raw = phoneInput.value.trim();
        // Digits and optional leading + only
        var value = raw.replace(/[\s\-()]/g, '');
        var digits = value.replace(/\D/g, '');
        var isFormatOk = /^\+?[0-9]+$/.test(value);

        if (!value || !isFormatOk || digits.length < 10 || digits.length > 15) {
            setError(phoneInput, phoneError, 'Please enter a valid phone number (10–15 digits).');
            return false;
        }

        clearError(phoneInput, phoneError);
        return true;
    }

    function validateForm() {
        var nameValid = validateName();
        var emailValid = validateEmail();
        var phoneValid = validatePhone();
        return nameValid && emailValid && phoneValid;
    }

    // Phone: allow only numbers and + (leading + only)
    phoneInput.addEventListener('input', function () {
        var cleaned = phoneInput.value.replace(/[^0-9+]/g, '');

        if (cleaned.indexOf('+') !== -1) {
            cleaned = '+' + cleaned.replace(/\+/g, '');
        }

        if (phoneInput.value !== cleaned) {
            phoneInput.value = cleaned;
        }

        if (phoneInput.value.trim()) {
            validatePhone();
        } else {
            clearError(phoneInput, phoneError);
        }
    });

    phoneInput.addEventListener('keypress', function (event) {
        var key = event.key;
        if (!/[0-9+]/.test(key)) {
            event.preventDefault();
        }
        if (key === '+' && (phoneInput.selectionStart !== 0 || phoneInput.value.indexOf('+') !== -1)) {
            event.preventDefault();
        }
    });

    phoneInput.addEventListener('paste', function (event) {
        event.preventDefault();
        var pasted = (event.clipboardData || window.clipboardData).getData('text') || '';
        var cleaned = pasted.replace(/[^0-9+]/g, '');

        if (cleaned.indexOf('+') !== -1) {
            cleaned = '+' + cleaned.replace(/\+/g, '');
        }

        phoneInput.value = cleaned.slice(0, 16);
        validatePhone();
    });

    // Name: block digits while typing
    nameInput.addEventListener('input', function () {
        var cleaned = nameInput.value.replace(/[0-9]/g, '');
        if (nameInput.value !== cleaned) {
            nameInput.value = cleaned;
        }
        if (nameInput.value.trim()) validateName();
        else clearError(nameInput, nameError);
    });

    emailInput.addEventListener('input', function () {
        if (emailInput.value.trim()) validateEmail();
        else clearError(emailInput, emailError);
    });

    nameInput.addEventListener('blur', validateName);
    emailInput.addEventListener('blur', validateEmail);
    phoneInput.addEventListener('blur', validatePhone);

    var statusEl = document.getElementById('cta_form_status');
    var submitBtn = form.querySelector('.cta-submit');

    function showStatus(type, message) {
        if (!statusEl) return;
        statusEl.hidden = false;
        statusEl.className = 'cta-form-status is-' + type;
        statusEl.textContent = message;
    }

    function clearStatus() {
        if (!statusEl) return;
        statusEl.hidden = true;
        statusEl.className = 'cta-form-status';
        statusEl.textContent = '';
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!validateForm()) {
            var firstInvalid = form.querySelector('.cta-field.is-invalid .form-control');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        clearStatus();

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.classList.add('is-sending');
        }

        var formData = new FormData(form);

        fetch(form.action || 'send_cta_mail.php', {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        })
            .then(function (response) {
                return response.json().catch(function () {
                    throw new Error('Invalid server response');
                });
            })
            .then(function (data) {
                if (data && data.status === 'success') {
                    form.reset();
                    clearError(nameInput, nameError);
                    clearError(emailInput, emailError);
                    clearError(phoneInput, phoneError);
                    showStatus('success', data.message || 'Thank you! Your message has been sent.');
                } else {
                    showStatus('error', (data && data.message) || 'Something went wrong. Please try again.');
                }
            })
            .catch(function () {
                showStatus('error', 'Something went wrong. Please try again later.');
            })
            .finally(function () {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('is-sending');
                }
            });
    });
})();
