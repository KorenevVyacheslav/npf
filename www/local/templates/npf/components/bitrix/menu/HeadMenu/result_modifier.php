<?php
// скрипт для направления меню второго уровня
// в подменю 'subitems'

$arPrepItems = [];
if (!empty($arResult)) {
    foreach ($arResult as $key => $item) {
        if ($item['DEPTH_LEVEL'] === 1) {
            $arPrepItems[] = $item;             // если первый уровень меню, то добавляем его в корень
        } else {
            $arPrepItems[end(array_keys($arPrepItems))]['subitems'][] = $item;  // // иначе добавляем к подмассив subitems
        }
    }
}
$arResult = $arPrepItems;


