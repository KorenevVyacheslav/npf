<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<?php if (!empty($arResult)): ?>
    <!-- самцю первую ссылку выводим отдельно, т.к. у неё свой заголовок -->
    <h6 class="files__title">Действующая редакция:</h6>
    <div class="files__box">
        <div class="files__list ">
            <div class="files__item">
                <div class="files__icon">
                    <img src="<?= $arResult['FILES'][0]['ICON'] ?>" class="files__img"
                         alt="<?= $arResult['FILES'][0]['NAME'] ?>">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                        <a href="<?= $arResult['FILES'][0]['PATH'] ?>"
                           class="files__link" target="_blank" download>
                            <?= $arResult['FILES'][0]['NAME'] ?>
                        </a>
                    </div>
                    <div class="files__size"><?= $arResult['FILES'][0]['SIZE'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- удаляем первый элемент-->
    <? unset($arResult['FILES'][0]); ?>
    <!-- выводим все остальные ссылки -->
    <h6 class="files__title">Архив:</h6>
    <? foreach ($arResult['FILES'] as $file): ?>
        <div class="files__box">
            <div class="files__list ">
                <div class="files__item">
                    <div class="files__icon">
                        <img src="<?= $file['ICON'] ?>" class="files__img"
                             alt="<?= $file['NAME'] ?>">
                    </div>
                    <div class="files__attr">
                        <div class="files__name">
                            <a href="<?= $file['PATH'] ?>"
                               class="files__link" target="_blank" download>
                                <?= $file['NAME'] ?> </a>
                        </div>
                        <div class="files__size"><?= $file['SIZE'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>
<?php endif; ?>



