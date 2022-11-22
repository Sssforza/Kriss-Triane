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
</main>
<?
    require($_SERVER["DOCUMENT_ROOT"]."/local/templates/Kriss-Triane/footer.php");
?>