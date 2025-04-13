<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>

<!-- небольшая коррекция стилей, т.к. с оригинальными стилями эти надписи получаются слишком большие -->
<style>
    .type_text-title {
        font-size: 20px; /* Увеличьте размер шрифта */
        font-weight: bold; /* Сделайте текст жирным */
        color: #333; /* Выберите более контрастный цвет */
    }

    .type_text-subtitle {
        font-size: 18px;
        color: #666;
        margin-top: 10px; /* Добавьте отступ */
    }

    .contract__img {
        width: auto;
        height: 100px; /* Задайте фиксированную высоту */
        display: block;
        margin: 0 auto; /* Центрируйте изображение */
    }
</style>


<div class="hero">
    <!-- Первый слайдер  -->
    <div class="hero__item hero__item-blue4 position-relative"
         style="background: linear-gradient(45deg, #2a5ab1, #548cd6);">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="hero__box h-100">
                        <div class="hero__row h-100">
                            <div class="hero__col h-100">
                                <div class="hero__title" style="z-index: 9999;">
                                    <span style="color: #FFD06D;">Программа долгосрочных сбережений.</span> Возможности
                                    для каждого!
                                </div>
                                <div class="hero__description" style="z-index: 9999;">
                                    Начните копить на большие цели, реализуйте свои мечты или создайте прочный фундамент
                                    для будущей жизни! Благодаря финансовой поддержке государства и налоговым льготам,
                                    вы сможете эффективно увеличивать свои сбережения и достигать поставленных целей.
                                </div>
                                <div class="hero__btn-group" style="z-index: 9999;">
                                    <a href="https://client.npf-sng.ru/form-dds/"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Оформить ДДС онлайн
                                    </a>
                                    <a href="fiz-liz/PDS/"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Подробнее о программе
                                    </a>
                                </div>
                            </div>
                            <div class="hero__col h-100" style="z-index: 9999;">
                                <div class="hero__col h-100 align-items-end">
                                    <img width="600" height="auto" src="<?= SITE_TEMPLATE_PATH ?>/img/dds_banner.png"
                                         alt="" style="height: 400px; width: 600px; margin-bottom: -45px;"
                                         class="hero__img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Второй слайдер  -->
    <div class="hero__item hero__item-gold">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="hero__box h-100">
                        <div class="hero__row h-100">
                            <div class="hero__col h-100">
                                <div class="hero__title" style="z-index: 9999;">
                                    Работаете
                                    в<br> ПАО «Сургутнефтегаз»?
                                    Получите удвоение
                                    своих взносов!
                                </div>
                                <div class="hero__description" style="z-index: 9999;">
                                    Получите удвоение ваших взносов в рамках специальной корпоративной пенсионной
                                    программы «Партнёрство», позволяющей ежегодно получать до 120 тыс. рублей на вашу
                                    будущую пенсию от работодателя.
                                </div>
                                <div class="hero__btn-group" style="z-index: 9999;">
                                    <a href="fiz-liz/Part/" class="hero__btn sng__link-medium sng__link-medium--white">
                                        узнать больше о программе
                                    </a>
                                    <a href="https://client.npf-sng.ru/online-record/"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Онлайн-запись
                                    </a>
                                </div>
                            </div>
                            <div class="hero__col h-100" style="z-index: 9999;">
                                <div class="hero__col h-100 align-items-end">
                                    <img width="600" height="300" src="<?= SITE_TEMPLATE_PATH ?>/img/money-bank.svg"
                                         alt="" class="hero__img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Третий слайдер  -->
    <div class="hero__item hero__item-emerald">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="hero__box h-100">
                        <div class="hero__row h-100">
                            <div class="hero__col h-100">
                                <div class="hero__title">
                                    Онлайн-запись<br> на личный приём
                                </div>
                                <div class="hero__description">
                                    Мы рады сообщить вам о запуске нового онлайн-сервиса предварительной записи на приём
                                    в Фонд. Теперь можно самому записаться в Фонд, выбрать удобную для вас услугу, дату
                                    и время записи.
                                </div>
                                <div class="hero__btn-group">
                                    <a href="https://client.npf-sng.ru/online-record/"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Онлайн-запись
                                    </a>
                                    <a href="online-record-instruction/index.html"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Инструкция
                                    </a>
                                </div>
                            </div>
                            <div class="hero__col h-100">
                                <div class="hero__col h-100 align-items-end">
                                    <img height="350" src="<?= SITE_TEMPLATE_PATH ?>/img/online-record.svg" alt=""
                                         class="hero__img" style="margin-right: 60px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Четвертый слайдер  -->
    <div class="hero__item hero__item-red">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="hero__box h-100">
                        <div class="hero__row h-100">
                            <div class="hero__col h-100">
                                <div class="hero__title">
                                    Поменяли паспорт
                                    или номер телефона?
                                </div>
                                <div class="hero__description">
                                    Если у вас изменились паспортные или иные данные, указанные вами при заключении
                                    договоров, пожалуйста, сообщите их нам. Нам важно, чтобы мы оставались на связи!
                                </div>
                                <div class="hero__btn-group">
                                    <a href="our-clients/update-pers-info/index.html"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Подробнее
                                    </a>
                                    <a href="https://client.npf-sng.ru/auth/"
                                       class="hero__btn sng__link-medium sng__link-medium--white">
                                        Обновить онлайн
                                    </a>
                                </div>
                            </div>
                            <div class="hero__col h-100 align-items-end">
                                <img width="600" height="350" src="<?= SITE_TEMPLATE_PATH ?>/img/passport.svg" alt=""
                                     class="hero__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Конец сладеров  -->


</div>
<div class="contract">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contract__box">
                    <div class="contract__info">
                        <div class="contract__info-title">
                            Фонд – ваш надёжный партнёр
                        </div>
                        <div class="contract__info-description">
                            <p>
                                Результаты инвестирования 2023 года в очередной раз подтвердили статус Фонда как
                                надёжного партнёра.
                            </p>
                            <p>
                                Фонд не только сохранил, но и увеличил пенсионные сбережения своих клиентов, в очередной
                                раз продемонстрировав устойчивость к внешнеэкономическим факторам и правильность выбора
                                стратегии. Такой результат достигнут благодаря успешным действиям управляющих компаний и
                                слаженной работе команды специалистов Фонда.
                            </p>
                        </div>
                        <a href="fiz-liz/dogovor-main/" class="sng__link-medium">Как стать клиентом?</a>
                    </div>
                    <div class="contract__hero contract__hero-active">
                        <div class="contract__hero-title type_text type_text-title">
                            Доходность Фонда по НПО,
                        </div>
                        <div class="contract__hero-subtitle type_text type_text-subtitle">
                            распределённая на счета, за 2023 год:
                        </div>
                        <div class="contract__hero-number">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/number8_86.svg" alt="" class="contract__img">
                        </div>
                    </div>
                    <div class="contract__hero">
                        <div class="contract__hero-title type_text type_text-title">
                            Доходность Фонда по ОПС,
                        </div>
                        <div class="contract__hero-subtitle type_text type_text-subtitle">
                            распределённая на счета, за 2023 год:
                        </div>
                        <div class="contract__hero-number">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/number6_00.svg" alt="" class="contract__img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service__box">
                    <div class="service__left position-relative">
                        <div class="service__title">
                            Онлайн-сервисы
                        </div>
                        <div class="service__subtitle">
                            для оперативных решений
                        </div>
                    </div>
                    <div class="service__right">
                        <a href="https://client.npf-sng.ru/form-dds/" class="sng__card">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/goal.svg" alt="" class="sng__card-icon">
                            <div class="sng__card-title">
                                ДДС онлайн
                            </div>
                            <div class="sng__card-description">
                                Заключите договор долгосрочных сбережений онлайн
                            </div>
                        </a>
                        <a href="https://client.npf-sng.ru/form-all/" class="sng__card">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/document.svg" alt="" class="sng__card-icon">
                            <div class="sng__card-title">
                                НПО онлайн
                            </div>
                            <div class="sng__card-description">
                                Заключите договор НПО онлайн<br><br>
                            </div>
                        </a>
                        <a href="https://client.npf-sng.ru/online-record/" class="sng__card">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/edit.svg" alt="" class="sng__card-icon">
                            <div class="sng__card-title">
                                Онлайн-запись
                            </div>
                            <div class="sng__card-description">
                                Запишитесь на личный приём в офис Фонда в г. Сургут<br><br>
                            </div>
                        </a>
                        <a href="install/index.html" class="sng__card">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/smartphone.svg" alt=""
                                 class="sng__card-icon icon-size-phone">
                            <div class="sng__card-title">
                                Веб-приложение
                            </div>
                            <div class="sng__card-description">
                                Установите приложение на телефон для быстрого доступа к личному кабинету<br>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ops">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ops__box position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/npf_rectangle2.svg" height="418" width="477.35" alt=""
                         class="ops__img">
                    <div class="ops__info">
                        <div class="ops__info-title">
                            29 лет истории, которую мы создаем вместе!
                        </div>
                        <div class="ops__info-description">
                            <p>
                                АО «НПФ «Сургутнефтегаз» - негосударственный пенсионный фонд России, который
                                осуществляет деятельность по <a href="fiz-liz/OPS/">обязательному пенсионному
                                    страхованию (ОПС)</a>, <a href="fiz-liz/NPO/">негосударственному
                                    пенсионному обеспечению (НПО)</a> и <a href="fiz-liz/PDS/">программе
                                    долгосрочных сбережений (ПДС)</a>.
                            </p>
                            <p>
                                Помогать людям сформировать финансовую культуру, ориентированную на долгосрочную
                                перспективу – основная миссия Фонда.
                            </p>
                            <p>
                                Приоритетные направления работы – обеспечение сохранности и эффективное <a
                                    href="results/">управление пенсионными активами</a> в интересах клиентов,
                                а также развитие технологий клиентского сервиса и расширение спектра онлайн-услуг.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="news__head">
                    Новости
                </div>
                <div class="news__body">
                    <div class="row">
                        <div class="col-4 news__col">
                            <a href="news/detail5f15.html?ID=12829" class="news__link" id="bx_3218110189_12829">
                                <div class="news__item">
                                    <div class="news__box w-100">
                                        <div class="news__row w-100">
                                            <div class="news__user">
                                                Участники «Партнёрства» получили 13-ое удвоение своих взносов!
                                            </div>
                                            <div class="news__date-ago">
                                                27.02.2025
                                            </div>
                                        </div>
                                        <div class="news__preview w-100">
                                            В феврале на счета участников программы был зачислен взнос от ПАО
                                            «Сургутнефтегаз» за 2024 год.<br/>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4 news__col">
                            <a href="news/detail93a0.html?ID=12790" class="news__link" id="bx_3218110189_12790">
                                <div class="news__item">
                                    <div class="news__box w-100">
                                        <div class="news__row w-100">
                                            <div class="news__user">
                                                Необходимо «разморозить» накопления?
                                            </div>
                                            <div class="news__date-ago">
                                                13.02.2025
                                            </div>
                                        </div>
                                        <div class="news__preview w-100">
                                            Узнайте, как можно выгодно получить средства пенсионных накоплений после
                                            перевода в ПДС.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4 news__col">
                            <a href="news/detail06eb.html?ID=12746" class="news__link" id="bx_3218110189_12746">
                                <div class="news__item">
                                    <div class="news__box w-100">
                                        <div class="news__row w-100">
                                            <div class="news__user">
                                                Уважаемые клиенты, будьте бдительны!
                                            </div>
                                            <div class="news__date-ago">
                                                27.01.2025
                                            </div>
                                        </div>
                                        <div class="news__preview w-100">
                                            В последнее время участились случаи мошенничества через поддельные аккаунты
                                            в мессенджерах.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4 news__col">
                            <a href="news/detail96f9.html?ID=12700" class="news__link" id="bx_3218110189_12700">
                                <div class="news__item">
                                    <div class="news__box w-100">
                                        <div class="news__row w-100">
                                            <div class="news__user">
                                                С наступающим новым годом!
                                            </div>
                                            <div class="news__date-ago">
                                                28.12.2024
                                            </div>
                                        </div>
                                        <div class="news__preview w-100">
                                            Новый год – новая страница жизни. Пусть грядущий год станет началом для
                                            новых счастливых&nbsp;&nbsp;событий!
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4 news__col">
                            <a href="news/detail8e26.html?ID=12679" class="news__link" id="bx_3218110189_12679">
                                <div class="news__item">
                                    <div class="news__box w-100">
                                        <div class="news__row w-100">
                                            <div class="news__user">
                                                Предпраздничный режим работы
                                            </div>
                                            <div class="news__date-ago">
                                                11.12.2024
                                            </div>
                                        </div>
                                        <div class="news__preview w-100">
                                            Уважаемые клиенты, обратите внимание на график работы Фонда.
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4 news__col">
                            <a href="news/detail224f.html?ID=12662" class="news__link" id="bx_3218110189_12662">
                                <div class="news__item">
                                    <div class="news__box w-100">
                                        <div class="news__row w-100">
                                            <div class="news__user">
                                                Произведена индексация негосударственных пенсий!
                                            </div>
                                            <div class="news__date-ago">
                                                02.12.2024
                                            </div>
                                        </div>
                                        <div class="news__preview w-100">
                                            Новый год совсем близко, и мы рады поделиться с вами хорошими новостями!
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
                <div class="news__more">
                    <a href="news/index.html" class="sng__link-medium">
                        Больше новостей
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");

?>
