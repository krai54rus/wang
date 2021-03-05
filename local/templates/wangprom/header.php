<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
<html>
<head>
<?$APPLICATION->ShowHead();?>
<?
if (CUser::GetID() != 1) {
    echo "Сайт в разработке";
    die;
}
?>
<meta charset="utf-8"/>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?$APPLICATION->ShowTitle()?></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


<?

Asset::getInstance()->addJs('//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js');
Asset::getInstance()->addJs('//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
Asset::getInstance()->addJs('//unpkg.com/swiper/swiper-bundle.js');
Asset::getInstance()->addJs('//unpkg.com/swiper/swiper-bundle.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script_quick.js');
?>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">

<?$APPLICATION->ShowPanel()?>


<?if($USER->IsAdmin()):?>
<div class="basket-line-ghost">
    <?$APPLICATION->IncludeComponent(
        "bitrix:sale.basket.basket.line",
        "",
        array(
            "HIDE_ON_BASKET_PAGES" => "N",
            "PATH_TO_BASKET" => "//taiyan.ru/personal/cart/",
            "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
            "PATH_TO_PERSONAL" => SITE_DIR."personal/",
            "PATH_TO_PROFILE" => SITE_DIR."personal/",
            "PATH_TO_REGISTER" => SITE_DIR."login/",
            "POSITION_FIXED" => "N",
            "SHOW_AUTHOR" => "N",
            "SHOW_EMPTY_VALUES" => "Y",
            "SHOW_NUM_PRODUCTS" => "Y",
            "SHOW_PERSONAL_LINK" => "N",
            "SHOW_PRODUCTS" => "N",
            "SHOW_TOTAL_PRICE" => "Y",
            "COMPONENT_TEMPLATE" => "main",
            "PATH_TO_AUTHORIZE" => "",
            "SHOW_REGISTRATION" => "N"
        ),
        false
    );?>
</div>
<?endif?>
<script type="text/javascript">
    $(document).ready(function() {
        $("a.modalbox").fancybox(
            {
                'width'  : 875,           // set the width
                'height' : 540,           // set the height
            });
    });
</script>
