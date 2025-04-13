<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

//ini_set('display_errors', 1); error_reporting(E_ALL);
?>

<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php $APPLICATION->ShowTitle() ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">

    <?php
    // стили, скачанные с сайта НПФ
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
    Asset::getInstance()->addString('<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic" rel="stylesheet" >');

    // дополнительный стиль для стрелочки вниз верхнего меню
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/style.css');

    $APPLICATION->ShowHead(); ?>
</head>
<body>

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<header id="head">
    <div class="container">
        <div class="row">
            <div class="col-12 header-col-12">
                <nav class="nav">
                    <a href="<?= SITE_DIR ?>" class="nav__link adaptive__logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg" alt="">
                    </a>

                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"HeadMenu", 	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "subtop",      // задаем тип меню для дочерних меню
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "HeadMenu"
	),
	false
);?>

                    <ul class="nav__list nav__list-right">
                        <li class="nav__item d-flex">
                            <div class="nav__social-container">
                                <a href="tel:88002001429" class="nav__phone-number">
                                    8-800-200-14-29
                                </a>
                                <div class="nav__social-box">
                                    <div class="nav__social">
                                        <a href="https://vk.com/npfsng" class="nav__link">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/VK.svg" alt=""
                                                 class="nav__social-img">
                                        </a>
                                    </div>
                                    <div class="nav__social">
                                        <a href="#" class="nav__link nav__search nav__open" data-menu-id="search">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26.979" height="25.344"
                                                 viewbox="0 0 26.979 25.344">
                                                <g fill="none" stroke="#0069aa" stroke-width="2">
                                                    <circle cx="10.5" cy="10.5" r="10.5" stroke="none"></circle>
                                                    <circle cx="10.5" cy="10.5" r="9.5" fill="none"></circle>
                                                </g>
                                                <path
                                                        d="M1.466-.045A1.349,1.349,0,0,1,2.887,1.349l-.271,8.64A1.567,1.567,0,0,1,1.1,11.474,1.349,1.349,0,0,1-.317,10.08l.271-8.64A1.567,1.567,0,0,1,1.466-.045Z"
                                                        transform="matrix(0.602, -0.799, 0.799, 0.602, 16.077, 18.184)"
                                                        fill="#0069aa">

                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="nav__social">
                                        <a href="#" class="nav__link callback-link">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/headset_blue.svg" alt=""
                                                 class="nav__social-img" width="26.979" height="25.344">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav__list nav__list__lastChild">
                        <li class="nav__last__child nav__item d-flex flex-column align-items-center justify-content-center">
                            <a href="https://client.npf-sng.ru/"
                               class="sng__link-medium sng__link-medium--background mb-2 position-relative nav__lastChild-btn"
                               target="_blank">
                                Личный кабинет
                            </a>
                            <a href="contacts/index.html" class="nav__link" data-menu-id="contacts">Обратиться в
                                Фонд</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>   <!-- container -->

</header>


