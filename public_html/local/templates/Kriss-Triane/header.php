<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <link rel="shortcut icon" href="/dist/img/favicons/favicon.ico" type="image/x-icon">
    <link rel='stylesheet' href="/dist/css/main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="/dist/js/main.js"></script>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__content">
                <div class="header__block">
                    <div class="header__address">Омск, ул. Волочаевская, 15/2</div>
                    <div class="header__working">Ежедневно с 9:00 до 21:00</div>
                </div>
                <div class="header__block">
                    <div class="header__logo">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/logo.svg';?>
                    </div>
                </div>
                <div class="header__block header__block_right">
                    <div class="header__wrapper">
                        <div class="header__tel">
                            <a href="tel:+7(3812)220011" class="header__link">+7 (3812) 22-00-11</a>
                        </div>
                        <div class="header__request">
                            <a href="#popupRequestCall" class="header__call requestCall_js">Заказать звонок</a>
                        </div>
                    </div>
                    <div class="hamburger hamburger_js">
                        <div class="hamburger__box">
                            <div class="hamburger__inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="headerMenu">
            <div class="headerMenu__content">
                <div class="headerMenu__top">
                    <div class="headerMenu__logo">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/logo.svg';?>
                    </div>
                    <div class="hamburger hamburger_js">
                        <div class="hamburger__box">
                            <div class="hamburger__inner"></div>
                        </div>
                    </div>
                </div>
                <ul class="headerMenu__nav">
                    <li class="headerMenu__li">
                        <a href="#" class="headerMenu__reference">О нас</a>
                    </li>
                    <li class="headerMenu__li">
                        <a href="#" class="headerMenu__reference">Услуги</a>
                    </li>
                    <li class="headerMenu__li">
                        <a href="#" class="headerMenu__reference">Цены</a>
                    </li>
                    <li class="headerMenu__li">
                        <a href="#" class="headerMenu__reference">Акции</a>
                    </li>
                    <li class="headerMenu__li">
                        <a href="#" class="headerMenu__reference">Отзывы</a>
                    </li>
                    <li class="headerMenu__li">
                        <a href="#" class="headerMenu__reference">Контакты</a>
                    </li>
                </ul>
                <div class="headerMenu__wrapper">
                    <div class="headerMenu__box">
                        <div class="headerMenu__top">
                            <a href="tel:+7(3812)220011" class="headerMenu__tel">+7 (3812) 22-00-11</a>
                        </div>
                        <div class="headerMenu__bottom">
                            <a href="#" class="headerMenu__link">Заказать звонок</a>
                        </div>
                    </div>
                    <div class="headerMenu__box">
                        <div class="headerMenu__top">Омск, ул. Волочаевская, 15/2</div>
                        <div class="headerMenu__bottom">Ежедневно с 9:00 до 21:00</div>
                    </div>
                </div>
                <div class="headerMenu__flower" style="background-image:url(/dist/img/flower.png)"></div>
            </div>
        </div>
        <div class="popup white-popup mfp-hide" id="popupRequestCall">
            <div class="popup__close popupClose_js">
                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/popupClose.svg';?>
            </div>
            <div class="popup__content">
                <div class="popup__title">Заказать звонок</div>
                <div class="popup__description">Заполните форму, и&nbsp;мы&nbsp;перезвоним <br>вам в&nbsp;ближайшее время</div>
                <form action="" class="discount__form form formRequestCall_js">
                    <div class="discount__fileds">
                        <div class="envelopeInput">
                            <input type="text" name="user_name" placeholder="Имя" class="fileds_js">
                            <span class="envelopeInput__warning">Введите корректное имя</span>
                        </div>
                        <div class="envelopeInput">
                            <input type="number" name="user_telefon" placeholder="Телефон" class="fileds_js tel">
                            <span class="envelopeInput__warning">Введите корректный телефон</span>
                        </div>
                    </div>
                    <button class="btn popup__button">Отправить</button>
                    <div class="discount__privacy">
                        Нажимая &laquo;Отправить&raquo;, вы&nbsp;соглашаетесь с&nbsp;условиями <br><a href="#">политики&nbsp;конфиденциальности</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- чтобы вывести сообщение к body надо добавить класс messageThanks -->
        <div class="popup message messageThanks_js">
            <div class="popup__content">
                <div class="popup__close messageThanksClose_js">
                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/popupClose.svg';?>
                </div>
                <div class="popup__title">Спасибо за заявку!</div>
                <div class="popup__description">Мы&nbsp;перезвоним вам в&nbsp;ближайшее время</div>
            </div>
        </div>