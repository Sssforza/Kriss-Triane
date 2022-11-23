<?
    require($_SERVER["DOCUMENT_ROOT"]."/local/templates/Kriss-Triane/header.php");
?>
<link rel='stylesheet' href="/dist/css/blocks/index.css">

<main class="main page_main">
    <section class="banner">
        <div class="banner__content" style="background-image:url(/dist/img/trash/mainBanner.jpg)">
            <div class="banner__main">
                <div class="banner__spa">SPA в&nbsp;Kriss Trianе</div>
                <div class="banner__title">Идеальный отдых и&nbsp;минуты для себя!</div>
                <div class="btn banner__btn">Выбрать программу</div>
            </div>
            <div class="banner__list">
                <div class="banner__item">
                    <div class="banner__icon">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/bannerIcon1.svg';?>
                    </div>
                    <div class="banner__text">Расслабляющие массажные прикосновения</div>
                </div>
                <div class="banner__item">
                    <div class="banner__icon">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/bannerIcon2.svg';?>
                    </div>
                    <div class="banner__text">Ненавязчивые тонкие ароматы, музыка и&nbsp;приглушённый свет</div>
                </div>
                <div class="banner__item">
                    <div class="banner__icon">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/bannerIcon3.svg';?>
                    </div>
                    <div class="banner__text">Атмосфера отпуска и&nbsp;высококлассный сервис</div>
                </div>
            </div>
        </div>
    </section>
    <section class="programs">
        <div class="programs__content">
            <div class="sectionTitle">Программы</div>
            <div class="programsTabs">
                <div class="programsTabs__list">
                    <div class="programsTabs__item programsTabs_js active" data-program="personal">Персональные SPA-программы</div>
                    <div class="programsTabs__item programsTabs_js" data-program="forTwo">SPA для двоих</div>
                    <div class="programsTabs__item programsTabs_js" data-program="individual">Индивидуальное парение</div>
                    <div class="programsTabs__item programsTabs_js" data-program="premium">Премиальные уходы ComfortZone</div>
                </div>
            </div>
            <div class="programs__slider">
                <!-- 
                    programsSliider_personal_js для инициализации стрелочек
                    programsSliider_js для выбора табом контента по data-content
                    programsSliider__personal_js для инициализации слайдера
                    ! для каждого слайдера нужна своя инициализация
                 -->
                <div class="programsSliider programsSliider_personal_js programsSliider_js" data-content="personal">
                   <div class="programsSliider__content programsSliider__personal_js">
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__percentage">-15%</div>
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider3.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider1.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider2.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                    </div>
                    <div class="slideArrows"></div>
                </div>
                <div class="programsSliider programsSliider_forTwo_js programsSliider_js hide" data-content="forTwo">
                   <div class="programsSliider__content programsSliider__forTwo_js">
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__percentage">-25%</div>
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider3.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider1.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                    </div>
                    <div class="slideArrows"></div>
                </div>
                <div class="programsSliider programsSliider_individual_js programsSliider_js hide" data-content="individual">
                   <div class="programsSliider__content programsSliider__individual_js">
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__percentage">-10%</div>
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider3.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider1.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider2.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                    </div>
                    <div class="slideArrows"></div>
                </div>
                <div class="programsSliider programsSliider_premium_js programsSliider_js hide" data-content="premium">
                   <div class="programsSliider__content programsSliider__premium_js">
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__percentage">-5%</div>
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider3.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider1.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                        <div class="programsSliider__item">
                            <div class="programsSliider__picture">
                                <div class="programsSliider__img" style="background-image:url(/dist/img/trash/programsSliider2.jpg)"></div>
                            </div>
                            <div class="programsSliider__box">
                                <div class="programsSliider__title">Баунти</div>
                                <div class="programsSliider__wrapper">
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Меню программы</div>
                                            <ul class="programsSliider__ul">
                                                <div class="programsSliider__li">Кокосовый пилинг для тела</div>
                                                <div class="programsSliider__li">Часовой акцент-массаж</div>
                                                <div class="programsSliider__li">Массаж головы</div>
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Стоимость</div>
                                            <div class="programsSliider__cost">
                                                <div class="programsSliider__total">4 675 Р</div>
                                                <div class="programsSliider__discount">5 500</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="programsSliider__wrap">
                                        <div class="programsSliider__list">
                                            <div class="programsSliider__subtitle">Описание</div>
                                            <ul class="programsSliider__text">
                                                Обновление и&nbsp;абсолютное расслабление тела. Чуть больше, чем вы&nbsp;знали о&nbsp;райском наслаждении.
                                            </ul>
                                        </div>
                                        <div class="programsSliider__info">
                                            <div class="programsSliider__subtitle">Длительность</div>
                                            <div class="programsSliider__time">1,5 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn programsSliider__btn">Записаться</div>
                            </div>
                        </div>
                    </div>
                    <div class="slideArrows"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="video" style="background-image:url(/dist/img/videoBg.jpg)">
        <div class="video__content">
            <div class="video__title">Посмотрите видео о&nbsp;том, как проходит сеанс</div>
            <div class="video__play">
                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/videoPlay.svg';?>
            </div>
        </div>
    </section>
</main>
<?
    require($_SERVER["DOCUMENT_ROOT"]."/local/templates/Kriss-Triane/footer.php");
?>