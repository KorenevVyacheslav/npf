<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Для физических лиц");?>

<div id="bg" class="bg hidden"></div>
    <div id="panel" class="panel hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="program" class="panel__box">
                        <div class="panel__content">
                            <div class="panel__title">
                                <div class="panel__title-head">
                                    Программы
                                </div>
                                <div class="panel__title-body"></div>
                            </div>
                            <div class="panel__list">
                                <div class="panel__row">
                                    <div class="panel__head">
                                        Для физических лиц
                                    </div>
                                    <div class="panel__body">
                                        <div class="panel__col"><div class="panel__item"><a href="OPS/index.php" class="panel__link">Обязательное пенсионное страхование</a><div class="arrow"></div></div>

                                            <div class="panel__item"><a href="NPO/index.html" class="panel__link">Негосударственное пенсионное обеспечение</a><div class="arrow"></div></div>

                                        </div>
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="PDS/index.html" class="panel__link">Программа долгосрочных сбережений</a><div class="arrow"></div></div>
                                            <div class="panel__item"><a href="Part/index.html" class="panel__link">Программа «Партнерство»</a><div class="arrow"></div></div>
                                        </div>
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="sved/index.html" class="panel__link">Для обязательного сведения</a><div class="arrow"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel__row">
                                    <div class="panel__head">
                                        Для юридических лиц
                                    </div>
                                    <div class="panel__body">
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="yur-liz/index.html" class="panel__link">Информация для юридических лиц</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="results" class="panel__box">
                        <div class="panel__content">
                            <div class="panel__title">
                                <div class="panel__title-head">
                                    Показатели деятельности
                                </div>
                                <div class="panel__title-body"></div>
                            </div>
                            <div class="panel__list">
                                <div class="panel__body">
                                    <div class="panel__col">
                                        <div class="panel__item"><a href="../results/OPS/index.html" class="panel__link">Инвестиционная политика ОПС</a><div class="arrow"></div></div>
                                        <div class="panel__item"><a href="../results/NPO/index.html" class="panel__link">Инвестиционная политика НПО</a><div class="arrow"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="our-clients" class="panel__box">
                        <div class="panel__content">
                            <div class="panel__title">
                                <div class="panel__title-head">
                                    Клиентам
                                </div>
                                <div class="panel__title-body"></div>
                            </div>
                            <div class="panel__list">
                                <div class="panel__row">
                                    <div class="panel__item"><a href="../our-clients/index.html" class="panel__link">Обязательное пенсионное страхование</a><div class="arrow"></div></div>
                                </div>
                                <div class="panel__row">
                                    <div class="panel__item"><a href="../our-clients/index.html" class="panel__link">Негосударственное пенсионное обеспечение</a><div class="arrow"></div></div>
                                </div>
                                <div class="panel__row">
                                    <div class="panel__item"><a href="../our-clients/index.html" class="panel__link">Негосударственная пенсия от работодателя ПАО «Сургутнефтегаз»</a><div class="arrow"></div></div>
                                </div>
                                <div class="panel__row">
                                    <div class="panel__item"><a href="../our-clients/index.html" class="panel__link">Программа долгосрочных сбережений</a><div class="arrow"></div></div>
                                </div>
                                <div class="panel__row">
                                    <div class="panel__item"><a href="../our-clients/index.html" class="panel__link">Другое</a><div class="arrow"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section id="main" class="main">
        <div class="sng__section">
            <div class="container sng__container">
                <div class="sng__content">
                    <div class="row">
                        <div class="col-12">
                            <div class="sng__box">
                                <h2 style="text-align:center">Программы</h2>
                                <h3><b>Для физических лиц</b></h3>
                                <!-- test -->
                                <div class="sng__cards">
                                    <a href="OPS/" class="sng__card sng__card-min">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/shield.svg" alt="" class="sng__card-icon">
                                        <div class="sng__card-description">
                                            Обязательное пенсионное страхование
                                        </div>
                                    </a>
                                    <a href="PDS/" class="sng__card sng__card-min">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/goal.svg" alt="" class="sng__card-icon">
                                        <div class="sng__card-description">
                                            Программа долгосрочных сбережений
                                        </div>
                                    </a>

                                    <a href="NPO/" class="sng__card sng__card-min">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/contract_icon.svg" alt="" class="sng__card-icon">
                                        <div class="sng__card-description">
                                            Негосударственное пенсионное обеспечение
                                        </div>
                                    </a>
                                    <a href="Part/" class="sng__card sng__card-min">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/group2.svg" alt="" class="sng__card-icon">
                                        <div class="sng__card-description">
                                            Корпоративная пенсионная программа «Партнёрство» для работников ПАО «Сургутнефтегаз»
                                        </div>
                                    </a>
                                    <a href="sved/" class="sng__card sng__card-min">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/paper.svg" alt="" class="sng__card-icon">
                                        <div class="sng__card-description">
                                            Для обязательного сведения
                                        </div>
                                    </a>
                                </div>
                                <h3><b>Для юридических лиц</b></h3>
                                <div class="sng__cards">
                                    <a href="yur-liz/" class="sng__card sng__card-min">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/folder.svg" alt="" class="sng__card-icon">
                                        <div class="sng__card-description">
                                            Информация для юридических лиц
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
