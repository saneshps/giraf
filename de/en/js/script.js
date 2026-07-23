$('#top').click(function () {
    $('html,body').animate({
        scrollTop: 0
    }, 900);
    return false;
});
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