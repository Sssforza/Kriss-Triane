// open/close hamburger menu
export function hamburgerMenu() {
    if (document.querySelector('.hamburger_js')) {
        let hamburger = document.querySelectorAll('.hamburger_js');
        hamburger.forEach((item) => {
            item.addEventListener("click", (e) => {
                if (item.classList.contains('active')) {
                    hamburger.forEach((item) => {
                        item.classList.remove('active');
                    });
                    document.body.classList.remove('openMenu');
                } else {
                    hamburger.forEach((item) => {
                        item.classList.add('active');
                    });
                    document.body.classList.add('openMenu');
                }
            });
        });
    }
}

// header fixed
export function headerFixed() {
    if (document.querySelector('.header')) {
        let header = $('.header');
        let firstBlock = $('.firstBlock_js');
        let firstBlockHeight = firstBlock.height();
        $(window).scroll(function () {
            if ($(this).scrollTop() > firstBlockHeight) {
                header.addClass('header_fixed');
            } else {
                header.removeClass('header_fixed');
            }
        });
    }
}