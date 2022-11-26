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

// message thanks
export function messageThanks() {
    if (document.querySelector('.messageThanks_js')) {
        let messageClose = document.querySelector('.messageThanksClose_js');
        messageClose.addEventListener("click", () => {
            document.body.classList.remove('messageThanks');
        });
    }
};