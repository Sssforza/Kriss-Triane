// request a call
export function requestCall() {
    if (document.querySelector('.requestCall_js')) {
        $('.requestCall_js').magnificPopup({
            type: 'inline',
            tClose: 'Закрыть (Esc)',
            tLoading: 'Загрузка...',
            fixedContentPos: true,
        });
        $(document).on('click', '.popupClose_js', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    }
};

// choose a program 
export function chooseProgram () {
    if (document.querySelector('.chooseProgram_js')) {
        $('.chooseProgram_js').magnificPopup({
            type: 'inline',
            tClose: 'Закрыть (Esc)',
            tLoading: 'Загрузка...',
            fixedContentPos: true,
        });
        $(document).on('click', '.popupClose_js', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    }
};

// popup youtube
export function popupYoutube () {
    const popupYoutube = $(".popupYoutube_js");
	if(document.querySelector('.popupYoutube_js')) {
		$('.popupYoutube_js').magnificPopup({
			type: 'iframe',
			tClose: 'Закрыть (Esc)',
			tLoading: 'Загрузка...',
			mainClass: 'mfp-video',
			fixedContentPos: true,
		});
    }
};

// message thanks
export function messageThanks() {
    if (document.querySelector('.messageThanks_js')) {
        let messageClose = document.querySelector('.messageThanksClose_js');
        messageClose.addEventListener("click", () => {
            document.body.classList.remove('messageThanks');
        });
    }
};