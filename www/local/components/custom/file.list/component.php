<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CMedialib::Init();

/** класс формирования компонента
 *  для страницы allinfo/ustav
 */
class CustomListComponent extends CBitrixComponent
{

    public function executeComponent()
    {
        $this->arResult = [];

        // считываем коллекцию 'Устав' из медиабиблиотеки
        $items = CMedialibItem::GetList([
            'arCollections' => [getCollectionsID('Устав')]
        ]);

        // создаем массив arResult["FILES"] c данными по каждому файлу
        foreach($items as $item) {
            $ext = GetFileExtension($item["PATH"]);
            $this->arResult["FILES"][] = [
                "NAME" => $item["NAME"],
                "PATH" => $item["PATH"],
                "ICON" => GetIconByExtension($ext),
                "SIZE" => GetFileSize($item["PATH"]) // Добавленное поле
            ];
        }

        $this->IncludeComponentTemplate();
    }
}

// Создаем объект компонента
$component = new CustomListComponent($this); //ссылка на родительский компонент
$component->executeComponent();


