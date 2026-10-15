// Reveal the compact back-to-top control after a short scroll.
(function () {
    var topButton = document.getElementById('top');
    if (!topButton) return;

    var visibilityThreshold = 200;
    var updatePending = false;
    topButton.setAttribute('aria-label', 'Back to top');
    topButton.setAttribute('title', 'Back to top');

    function updateTopButton() {
        var page = document.scrollingElement || document.documentElement;
        var visible = page.scrollTop >= visibilityThreshold;

        topButton.classList.toggle('is-visible', visible);
        topButton.setAttribute('aria-hidden', String(!visible));
        topButton.tabIndex = visible ? 0 : -1;
        if (!visible && document.activeElement === topButton) topButton.blur();
        updatePending = false;
    }

    function scheduleUpdate() {
        if (updatePending) return;
        updatePending = true;
        window.requestAnimationFrame(updateTopButton);
    }

    topButton.addEventListener('click', function (event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth'
        });
    });

    window.addEventListener('scroll', scheduleUpdate, { passive: true });
    window.addEventListener('resize', scheduleUpdate);
    window.addEventListener('load', scheduleUpdate);
    if ('ResizeObserver' in window) new ResizeObserver(scheduleUpdate).observe(document.body);
    updateTopButton();
})();
$('#home').click(function () {
    $('html, body').animate({
        scrollTop: $('#homepage').offset().top
    }, 800);
    return false;
});

$('#about').click(function () {
    $('html, body').animate({
        scrollTop: $('#aboutpage').offset().top
    }, 800);
    return false;
});

$('#artperson').click(function () {
    $('html, body').animate({
        scrollTop: $('#gridcontainer').offset().top
    }, 800);
    return false;
});

$('#gallery').click(function () {
    $('html, body').animate({
        scrollTop: $('#gallerypage').offset().top
    }, 800);
    return false;
});
$('#source').click(function () {
    $('html, body').animate({
        scrollTop: $('#sourcespage').offset().top
    }, 800);
    return false;
});


// ===========================  Grid and List View Start ===============================

var $cardContainer = $('.download-cards');
var $downloadCard = $('.download-card__content');
var $imageBox = $('.download-card__image')
var $viewTrigger = $('button').attr('data', 'trigger');

function loadImages() {
    $imageBox.each(function () {
        var url = $(this).attr('data-image');
        $(this)
            .css('background-image', 'url(' + url + ')')
            .removeAttr('data-image');
    })
}

function swapTriggerActiveClass(e) {
    $viewTrigger.removeClass('active');
    $(e.target).addClass('active');
}

function swapView(e) {
    var $currentView = $(e.target).attr('data-trigger');
    $cardContainer.attr('data-view', $currentView);
}

$(document).ready(function () {
    loadImages();
    $viewTrigger.click(function (e) {
        swapTriggerActiveClass(e);
        swapView(e);
    });
});

// ===========================  Grid and List View end ===============================
