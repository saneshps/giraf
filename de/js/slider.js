const sliderIMG = new Swiper(".slider-img", {
    loop: false,
    speed: 2400,
    parallax: true,
    pagination: {
        el: ".slider-pagination-count .total",
        type: "custom",
        renderCustom: (swiper, current, total) => `0${total}`
    },
})

const sliderText = new Swiper(".slider-text", {
    loop: false,
    speed: 2400,
    parallax: true,
    // mousewheel: {
    //     invert: false
    // },
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true
    },
    navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next",
    }
})

// sliderIMG.controller.control = sliderText;
sliderText.controller.control = sliderIMG;

// Animate gear
let gear = document.querySelector(".slider-gear");

sliderText.on('slideNextTransitionStart', () => {
    gsap.to(gear, 2.8, {
        rotation: "+=40",
        ease: Power2.easeOut
    })
})

sliderText.on('slidePrevTransitionStart', () => {
    gsap.to(gear, 2.8, {
        rotation: "-=40",
        ease: Power2.easeOut
    })
})

// Slide change
let currentNumber = document.querySelector(".slider-pagination-count .current");
let pageCurrentNumber = document.querySelector(".slider-pagination-current");

sliderText.on("slideChange", () => {
    let index = sliderText.realIndex + 1;

    gsap.to(currentNumber, .2, {
        force3D: true,
        y: -10,
        opacity: 0,
        ease: Power2.easeOut,
        onComplete: () => {
            currentNumber.innerHTML = `0${index}`;
            pageCurrentNumber.innerHTML = `0${index}`

            gsap.to(currentNumber, .1, {
                force3D: true,
                y: 10
            })
        }
    });

    gsap.to(currentNumber, .2, {
        force3D: true,
        y: 0,
        opacity: 1,
        ease: Power2.easeOut,
        delay: .3
    })
})