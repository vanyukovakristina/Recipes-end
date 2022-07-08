<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php

    use  \Bitrix\Main\Page\Asset;

    $APPLICATION->ShowHead();
    ?>

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/normalize.css");
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

    ?>


    <?php
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    Asset::getInstance()->addString('<meta name="keywords" content="рецепты,готовь и делись рецептами, кулинарные книги,любимые рецепты, любимые рецепты в одном месте, простые блюда, детские блюда, блюда от шеф-поваров, на праздник, RECIPES">');
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://fonts.googleapis.com"  rel="stylesheet" >');
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://fonts.gstatic.com"  rel="stylesheet" >');
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish&display=swap" rel="stylesheet" >');
    ?>
</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<header>
    <div class="nav">
        <img class="logo" src="<?= SITE_TEMPLATE_PATH; ?>/img/Recipes.png" alt>
        <nav>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a>Главная</a></li>
                <li class="nav-menu-item"><a>Рецепты</a></li>
                <li class="nav-menu-item"><a>Избранное</a></li>
            </ul>
        </nav>
        <div class="btn-group">
            <a class="btn-group-PA" href="" id="btn-group-PA"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/login.svg"
                                                                   alt=""></a>
            <a href="#" class="btn-group-login" id="btn-group-login">Войти</a>
        </div>
    </div>
    <div class="content">
        <div class="content-text">
            <h1 class="content-text-h1">Готовь и делись<br> рецептами</h1>
            <p class="content-text-p">Никаких кулинарных книг и блокнотов! Храни все<br> любимые рецепты в одном месте.
            </p>
        </div>
        <div class="content-btns">
            <a class="btn-rec" id="btn-rec" type="button" href="">+ Добавить рецепт</a>
            <a class="btn-login" href="#" id="btn-login">Войти</a>
        </div>
        <div class="img-main">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/img/main.png" alt="">
        </div>
    </div>
</header>
