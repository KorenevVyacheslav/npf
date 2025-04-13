<?php

/**
 * Возвращает ID коллекции по её имени
 *
 * @param string $name - имя коллекции
 * @return int - ID найденной коллекции
 */
function getCollectionsID($name)
{
    // Получаем все коллекции и применяем фильтр
    $collections = CMedialibCollection::GetList([
        'arFilter' => ['NAME' => $name]
    ]);
    return $collections['0']['ID'];
}

/**
 * Возвращает иконку по заданному расширению файла
 *
 * @param string $ext - расширение файла
 * @return string - файл иконки
 */
function GetIconByExtension($ext)
{
    $icons = [
        'pdf' => SITE_TEMPLATE_PATH . '/img/pdf.svg',
        'doc' => SITE_TEMPLATE_PATH . '/img/word.svg',
        'jpg' => SITE_TEMPLATE_PATH . '/img/jpg.svg',
        'xls' => SITE_TEMPLATE_PATH . '/img/xls.svg',
    ];

    return $icons[$ext] ? $icons[$ext] : SITE_TEMPLATE_PATH . '/img/document.svg';
}


/**
 * Возвращает строку размера файла в челоевкочитаемом формате
 * @param string $path - путь к файлу
 * @return string - строка размера
 */

function GetFileSize($path)
{
    $absolutePath = $_SERVER['DOCUMENT_ROOT'] . $path;
    $bytes = filesize($absolutePath);
    $units = ['B', 'KB', 'MB', 'GB'];

    $pow = floor(log($bytes, 1024));
    $pow = min($pow, count($units) - 1);
    $size = $bytes / (1024 ** $pow);

    return round($size, 2) . ' ' . $units[$pow];
}
