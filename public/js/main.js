$(document).ready(function () {
    // Theme toggle functionality
    const $body = $('body');
    const $themeToggle = $('#themeToggle');

    // Check for saved theme preference or use system preference
    const savedTheme = localStorage.getItem('theme');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

    if (savedTheme === 'dark' || (savedTheme === null && prefersDarkScheme.matches)) {
        $body.removeClass('theme-light').addClass('theme-dark');
    }

    // Theme toggle button functionality
    $themeToggle.on('click', function () {
        if ($body.hasClass('theme-light')) {
            $body.removeClass('theme-light').addClass('theme-dark');
            localStorage.setItem('theme', 'dark');
        } else {
            $body.removeClass('theme-dark').addClass('theme-light');
            localStorage.setItem('theme', 'light');
        }
    });

    // Contact form submission
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        const $form = $(this);
        const $submitBtn = $form.find('.submit-btn');
        const $formMessage = $('#formMessage');

        $submitBtn.text('Sending...').prop('disabled', true);

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: $form.serialize(),
            success: function (response) {
                $formMessage.text(response.message || 'Thanks for your message! I\'ll get back to you soon.');
                $form.trigger('reset');
            },
            error: function () {
                $formMessage.text('Something went wrong. Please try again.');
            },
            complete: function () {
                $submitBtn.text('Send Message').prop('disabled', false);
            }
        });
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        const target = $(this.getAttribute('href'));

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 70 // Offset for fixed header
            }, 500);
        }
    });
});
