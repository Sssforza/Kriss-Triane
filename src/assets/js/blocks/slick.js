// programsSliiders
export function programsSliider_personal() {
    const slickProgramsPersonal = $(".programsSliider__personal_js");
    if (slickProgramsPersonal.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement('div');
        sliderCounter.classList.add('programsSliider__counter');

        var updateSliderCounter = function (slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + ' из ' + slidesCount)
        };

        slickProgramsPersonal.on('init', function (event, slick) {
            slickProgramsPersonal.append(sliderCounter);
            updateSliderCounter(slick);
        });

        slickProgramsPersonal.on('afterChange', function (event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
        slickProgramsPersonal.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: false,
            speed: 900,
            draggable: false,
            infinite: false,
            variableWidth: true,
            arrows: true,
            appendArrows: '.programsSliider_personal_js .slideArrows',
            prevArrow: '<div class="slideArrows__prev"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.540381 5.45962C0.286539 5.20578 0.286539 4.79422 0.54038 4.54038L4.67695 0.403808C4.9308 0.149967 5.34235 0.149967 5.59619 0.403808C5.85003 0.657649 5.85003 1.06921 5.59619 1.32305L1.91924 5L5.59619 8.67696C5.85004 8.9308 5.85004 9.34236 5.59619 9.5962C5.34235 9.85004 4.9308 9.85004 4.67695 9.5962L0.540381 5.45962ZM27 5.65L1 5.65L1 4.35L27 4.35L27 5.65Z" fill="#678EC9"/></svg></div>',
            nextArrow: '<div class="slideArrows__next"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.4596 5.45962C26.7135 5.20578 26.7135 4.79422 26.4596 4.54038L22.323 0.403808C22.0692 0.149967 21.6576 0.149967 21.4038 0.403808C21.15 0.657649 21.15 1.06921 21.4038 1.32305L25.0808 5L21.4038 8.67696C21.15 8.9308 21.15 9.34236 21.4038 9.5962C21.6576 9.85004 22.0692 9.85004 22.323 9.5962L26.4596 5.45962ZM-5.68248e-08 5.65L26 5.65L26 4.35L5.68248e-08 4.35L-5.68248e-08 5.65Z" fill="#678EC9"/></svg></div>',
        });


    }
};

export function programsSliider_forTwo() {
    const slickPrograms = $(".programsSliider__forTwo_js");
    if (slickPrograms.length) {
        let currentSlide;
        let slidesCount;
        let sliderCounter = document.createElement('div');
        sliderCounter.classList.add('programsSliider__counter');

        let updateSliderCounter = function (slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + ' из ' + slidesCount)
        };

        slickPrograms.on('init', function (event, slick) {
            slickPrograms.append(sliderCounter);
            updateSliderCounter(slick);
        });

        slickPrograms.on('afterChange', function (event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
        slickPrograms.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: false,
            speed: 900,
            draggable: false,
            infinite: false,
            variableWidth: true,
            arrows: true,
            appendArrows: '.programsSliider_forTwo_js .slideArrows',
            prevArrow: '<div class="slideArrows__prev"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.540381 5.45962C0.286539 5.20578 0.286539 4.79422 0.54038 4.54038L4.67695 0.403808C4.9308 0.149967 5.34235 0.149967 5.59619 0.403808C5.85003 0.657649 5.85003 1.06921 5.59619 1.32305L1.91924 5L5.59619 8.67696C5.85004 8.9308 5.85004 9.34236 5.59619 9.5962C5.34235 9.85004 4.9308 9.85004 4.67695 9.5962L0.540381 5.45962ZM27 5.65L1 5.65L1 4.35L27 4.35L27 5.65Z" fill="#678EC9"/></svg></div>',
            nextArrow: '<div class="slideArrows__next"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.4596 5.45962C26.7135 5.20578 26.7135 4.79422 26.4596 4.54038L22.323 0.403808C22.0692 0.149967 21.6576 0.149967 21.4038 0.403808C21.15 0.657649 21.15 1.06921 21.4038 1.32305L25.0808 5L21.4038 8.67696C21.15 8.9308 21.15 9.34236 21.4038 9.5962C21.6576 9.85004 22.0692 9.85004 22.323 9.5962L26.4596 5.45962ZM-5.68248e-08 5.65L26 5.65L26 4.35L5.68248e-08 4.35L-5.68248e-08 5.65Z" fill="#678EC9"/></svg></div>',
        });


    }
};

export function programsSliider_individual() {
    const slickPrograms = $(".programsSliider__individual_js");
    if (slickPrograms.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement('div');
        sliderCounter.classList.add('programsSliider__counter');

        var updateSliderCounter = function (slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + ' из ' + slidesCount)
        };

        slickPrograms.on('init', function (event, slick) {
            slickPrograms.append(sliderCounter);
            updateSliderCounter(slick);
        });

        slickPrograms.on('afterChange', function (event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
        slickPrograms.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: false,
            speed: 900,
            draggable: false,
            infinite: false,
            variableWidth: true,
            arrows: true,
            appendArrows: '.programsSliider_individual_js .slideArrows',
            prevArrow: '<div class="slideArrows__prev"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.540381 5.45962C0.286539 5.20578 0.286539 4.79422 0.54038 4.54038L4.67695 0.403808C4.9308 0.149967 5.34235 0.149967 5.59619 0.403808C5.85003 0.657649 5.85003 1.06921 5.59619 1.32305L1.91924 5L5.59619 8.67696C5.85004 8.9308 5.85004 9.34236 5.59619 9.5962C5.34235 9.85004 4.9308 9.85004 4.67695 9.5962L0.540381 5.45962ZM27 5.65L1 5.65L1 4.35L27 4.35L27 5.65Z" fill="#678EC9"/></svg></div>',
            nextArrow: '<div class="slideArrows__next"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.4596 5.45962C26.7135 5.20578 26.7135 4.79422 26.4596 4.54038L22.323 0.403808C22.0692 0.149967 21.6576 0.149967 21.4038 0.403808C21.15 0.657649 21.15 1.06921 21.4038 1.32305L25.0808 5L21.4038 8.67696C21.15 8.9308 21.15 9.34236 21.4038 9.5962C21.6576 9.85004 22.0692 9.85004 22.323 9.5962L26.4596 5.45962ZM-5.68248e-08 5.65L26 5.65L26 4.35L5.68248e-08 4.35L-5.68248e-08 5.65Z" fill="#678EC9"/></svg></div>',
        });


    }
};

export function programsSliider_premium() {
    const slickPrograms = $(".programsSliider__premium_js");
    if (slickPrograms.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement('div');
        sliderCounter.classList.add('programsSliider__counter');

        var updateSliderCounter = function (slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + ' из ' + slidesCount)
        };

        slickPrograms.on('init', function (event, slick) {
            slickPrograms.append(sliderCounter);
            updateSliderCounter(slick);
        });

        slickPrograms.on('afterChange', function (event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
        slickPrograms.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: false,
            speed: 900,
            draggable: false,
            infinite: false,
            variableWidth: true,
            arrows: true,
            appendArrows: '.programsSliider_premium_js .slideArrows',
            prevArrow: '<div class="slideArrows__prev"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.540381 5.45962C0.286539 5.20578 0.286539 4.79422 0.54038 4.54038L4.67695 0.403808C4.9308 0.149967 5.34235 0.149967 5.59619 0.403808C5.85003 0.657649 5.85003 1.06921 5.59619 1.32305L1.91924 5L5.59619 8.67696C5.85004 8.9308 5.85004 9.34236 5.59619 9.5962C5.34235 9.85004 4.9308 9.85004 4.67695 9.5962L0.540381 5.45962ZM27 5.65L1 5.65L1 4.35L27 4.35L27 5.65Z" fill="#678EC9"/></svg></div>',
            nextArrow: '<div class="slideArrows__next"><svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.4596 5.45962C26.7135 5.20578 26.7135 4.79422 26.4596 4.54038L22.323 0.403808C22.0692 0.149967 21.6576 0.149967 21.4038 0.403808C21.15 0.657649 21.15 1.06921 21.4038 1.32305L25.0808 5L21.4038 8.67696C21.15 8.9308 21.15 9.34236 21.4038 9.5962C21.6576 9.85004 22.0692 9.85004 22.323 9.5962L26.4596 5.45962ZM-5.68248e-08 5.65L26 5.65L26 4.35L5.68248e-08 4.35L-5.68248e-08 5.65Z" fill="#678EC9"/></svg></div>',
        });


    }
};

export function reviewsSliider() {
    const slickReviews = $(".reviewsSliider_js");

    slickReviews.slick({
        centerMode: true,
        className: "center",
        infinite: true,
        centerPadding: "60px",
        slidesToShow: 5,
        swipeToSlide: true,
        arrows: false,
        // initialSlide: 3,
        // variableWidth: true
    });
};

export function specialistSliider() {
    const slickSpecialist = $(".specialistSliider_js");
    slickSpecialist.slick({
        centerMode: true,
        slidesToShow: 3,
        variableWidth: true,
        arrows: false,
        infinite: true
    });
};