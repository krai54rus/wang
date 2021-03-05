<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');?>
<div class="basket-ghost">
    <?$APPLICATION->IncludeComponent(
        "bitrix:sale.basket.basket",
        "",
        Array(
            "ACTION_VARIABLE" => "basketAction",
            "ADDITIONAL_PICT_PROP_13" => "-",
            "ADDITIONAL_PICT_PROP_2" => "-",
            "ADDITIONAL_PICT_PROP_3" => "-",
            "ADDITIONAL_PICT_PROP_4" => "-",
            "ADDITIONAL_PICT_PROP_6" => "-",
            "ADDITIONAL_PICT_PROP_7" => "-",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AUTO_CALCULATION" => "Y",
            "BASKET_IMAGES_SCALING" => "adaptive",
            "COLUMNS_LIST" => array(0=>"NAME",1=>"DISCOUNT",2=>"PRICE",3=>"QUANTITY",4=>"SUM",5=>"PROPS",6=>"DELETE",7=>"DELAY",),
            "COLUMNS_LIST_EXT" => array(0=>"PREVIEW_PICTURE",1=>"DISCOUNT",2=>"DELETE",3=>"DELAY",4=>"SUM",),
            "COLUMNS_LIST_MOBILE" => array(0=>"PREVIEW_PICTURE",1=>"DELETE",2=>"DELAY",3=>"SUM",),
            "COMPATIBLE_MODE" => "Y",
            "COMPONENT_TEMPLATE" => "taiyan_new",
            "CORRECT_RATIO" => "Y",
            "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
            "DEFERRED_REFRESH" => "N",
            "DISCOUNT_PERCENT_POSITION" => "bottom-right",
            "DISPLAY_MODE" => "extended",
            "EMPTY_BASKET_HINT_PATH" => "/",
            "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
            "GIFTS_CONVERT_CURRENCY" => "N",
            "GIFTS_HIDE_BLOCK_TITLE" => "N",
            "GIFTS_HIDE_NOT_AVAILABLE" => "N",
            "GIFTS_MESS_BTN_BUY" => "Выбрать",
            "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
            "GIFTS_PAGE_ELEMENT_COUNT" => "4",
            "GIFTS_PLACE" => "BOTTOM",
            "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
            "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
            "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
            "GIFTS_SHOW_IMAGE" => "Y",
            "GIFTS_SHOW_NAME" => "Y",
            "GIFTS_SHOW_OLD_PRICE" => "N",
            "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
            "HIDE_COUPON" => "N",
            "LABEL_PROP" => array(),
            "LABEL_PROP_MOBILE" => "",
            "LABEL_PROP_POSITION" => "",
            "OFFERS_PROPS" => "",
            "PATH_TO_ORDER" => "/personal/order/make/?clear_cache=Y",
            "PRICE_DISPLAY_MODE" => "Y",
            "PRICE_VAT_SHOW_VALUE" => "Y",
            "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
            "QUANTITY_FLOAT" => "N",
            "SET_TITLE" => "Y",
            "SHOW_DISCOUNT_PERCENT" => "Y",
            "SHOW_FILTER" => "Y",
            "SHOW_RESTORE" => "Y",
            "TEMPLATE_THEME" => "site",
            "TOTAL_BLOCK_DISPLAY" => array(0=>"top",),
            "USE_DYNAMIC_SCROLL" => "Y",
            "USE_ENHANCED_ECOMMERCE" => "N",
            "USE_GIFTS" => "Y",
            "USE_PREPAYMENT" => "N",
            "USE_PRICE_ANIMATION" => "Y"
        )
    );?>
</div>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="header__button">
                    <a  data-fancybox data-animation-duration="700" data-options='{"touch" : false}' data-src="#retail" href="javascript:;" class="header-retail">Купить в розницу</a>
                    <a  data-fancybox data-animation-duration="700" data-options='{"touch" : false}' data-src="#wholesale" href="javascript:;" class="header-wholesale">Купить оптом</a>
                    <a  data-fancybox data-animation-duration="700" data-options='{"touch" : false}' data-touch="false" data-src="#pay" href="javascript:;" class="header-pay">Оплата и доставка</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="header__contacts">
                    <a href="tel:88009998899" class="header-phone">
                        <i class="icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 384 384" style="fill: #fff" xml:space="preserve">
                                    <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                                        c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                                        c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                                        C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                                    />
                            </svg>
                        </i>
                        88009998899</a>
                    <div class="header__social">
                        <a href="" class="header__social-icon header__social-icon_instagram">
                            <i class="icon"><svg height="511pt" viewBox="0 0 511 511.9" width="511pt" xmlns="http://www.w3.org/2000/svg" style="fill: #fff"><path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/></svg></i>
                        </a>
                        <a href="" class="header__social-icon header__social-icon_facebook">
                            <i class="icon"><svg viewBox="0 0 512 512" style="fill: #fff" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/></svg></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="offset-lg-8 col-lg-4 offset-md-6 col-md-6">
                <div class="banner__wrapper">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/logo.png" alt="" class="banner__logo">
                    <a  data-fancybox data-animation-duration="700" data-options='{"touch" : false}' data-src="#buy" href="javascript:;" class="banner__button">Заказать</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sertificate">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="d-block">
                    <a data-fancybox="sertificate" class="sertificate__left" href="<?= SITE_TEMPLATE_PATH?>/images/sertificate-wangprom.jpg">
                        <img src="<?= SITE_TEMPLATE_PATH?>/images/sertificate-wangprom.jpg" alt="" class="sertificate__img">
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sertificate__description">
                    <p class="text">Легендарные 100%-натуральные бальзамы на травах и эфирных маслах от семьи Вангпром изготовлены по древним рецептам тайских фармацевтов. Это самые популярные фитобальзамы Таиланда, которые широко используются внутри страны и далеко за ее пределами. Причина — в невероятной эффективности и быстроте действия! </p>
                </div>
            </div>
            <div class="col-lg-3">
                <a data-fancybox="sertificate" class="sertificate__right" href="<?= SITE_TEMPLATE_PATH?>/images/sertificate.jpg">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/sertificate.jpg" alt="" class="sertificate__img">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="catalog">
    <div class="container">
        <h2 class="catalog__title">Каталог</h2>
        <?
        global $arrFilter;
        $arrFilter = array("=ID" => array(1420,1421,1423,1422,1424,1425,1427,1426,1428,1429));
        ?>
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"catalog_top", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "//taiyan.ru/personal/cart/",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPATIBLE_MODE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "12",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "1c_catalog",
		"LABEL_PROP" => array(
		),
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_LIMIT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
			0 => "Розница МСК",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
		),
		"ROTATE_TIMER" => "30",
		"SECTION_URL" => "",
		"SEF_MODE" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PAGINATION" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "N",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION",
		"COMPONENT_TEMPLATE" => "catalog_top"
	),
	false
);?><br>
    </div>
</section>
<section class="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <iframe class="video-iframe" allowfullscreen="" title="youtube Видеоплеер" src="https://www.youtube.com/embed/JaK2ffABD6o?feature=oembed&amp;autoplay=1&amp;playlist=JaK2ffABD6o&amp;wmode=opaque&amp;loop=1&amp;controls=1&amp;mute=1&amp;rel=0&amp;modestbranding=0"></iframe>
            </div>
            <div class="col-lg-6">
                <div class="say-carousel">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_say", 
	array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILE_404" => "/404.php",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "1c_catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
        "FILTER_NAME" => "arrFilter",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider_say"
	),
	false
);?><br>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <span class="copyright">Copyright 2020 - © TAIYAN</span>
                <a href="tel:88009998899" class="footer-phone">
                    <i class="icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 384 384" style="fill: #fff" xml:space="preserve">
                                    <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                                        c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                                        c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                                        C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                                    />
                            </svg>
                    </i>
                    8 800 999 88 99</a>
            </div>
            <div class="offset-lg-5 col-lg-3">
                <a class="politic" target="_blank" href="//taiyan.ru/about/">Пользовательское соглашение</a>
            </div>
        </div>
    </div>
</footer>

<div id="retail" class="popup animated-modal" style="display: none;">
    <div class="popup__header">
        <h3 class="title">Купить в розницу</h3>
    </div>
    <div class="popup__body">
        <?$APPLICATION->IncludeComponent(
	"feedback.form", 
	".default", 
	array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_HREF_LINK" => "Y",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CAPTCHA_TYPE" => "default",
		"CATEGORY_SELECT_NAME" => "Выберите категорию",
		"CHANGE_CAPTCHA" => "N",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "Y",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "3",
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "system",
		"INPUT_APPEARENCE" => array(
			0 => "DEFAULT",
		),
		"JQUERY_EN" => "N",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(
		),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "NAME",
		"NOT_CAPTCHA_AUTH" => "Y",
		"PROPERTY_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
		),
		"PROPERTY_FIELDS_REQUIRED" => array(
			0 => "NAME",
			1 => "PHONE",
			2 => "EMAIL",
		),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(
		),
		"PROPS_AUTOCOMPLETE_NAME" => array(
		),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
		),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL1" => "",
		"SECTION_MAIL_ALL" => "",
		"SEND_IMMEDIATE" => "Y",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "Y",
		"SHOW_MESSAGE_LINK" => "Y",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_INPUT_LABEL" => "",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "N",
		"WIDTH_FORM" => "100%",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    </div>
</div>

<div id="wholesale" class="popup animated-modal" style="display: none;">
    <div class="popup__header">
        <h3 class="title">Купить оптом</h3>
    </div>
    <div class="popup__body">
        <?$APPLICATION->IncludeComponent(
	"feedback.form", 
	".default",
            array(
                "ACTIVE_ELEMENT" => "Y",
                "ADD_HREF_LINK" => "Y",
                "ALX_LINK_POPUP" => "N",
                "BBC_MAIL" => "",
                "CAPTCHA_TYPE" => "default",
                "CATEGORY_SELECT_NAME" => "Выберите категорию",
                "CHANGE_CAPTCHA" => "N",
                "CHECKBOX_TYPE" => "CHECKBOX",
                "CHECK_ERROR" => "Y",
                "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
                "FB_TEXT_NAME" => "",
                "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                "FORM_ID" => "2",
                "IBLOCK_ID" => "21",
                "IBLOCK_TYPE" => "system",
                "INPUT_APPEARENCE" => array(
                    0 => "DEFAULT",
                ),
                "JQUERY_EN" => "N",
                "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                "LOCAL_REDIRECT_ENABLE" => "N",
                "MASKED_INPUT_PHONE" => array(
                ),
                "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
                "NAME_ELEMENT" => "NAME",
                "NOT_CAPTCHA_AUTH" => "Y",
                "PROPERTY_FIELDS" => array(
                    0 => "NAME",
                    1 => "PHONE",
                    2 => "EMAIL",
                ),
                "PROPERTY_FIELDS_REQUIRED" => array(
                    0 => "NAME",
                    1 => "PHONE",
                    2 => "EMAIL",
                ),
                "PROPS_AUTOCOMPLETE_EMAIL" => array(
                ),
                "PROPS_AUTOCOMPLETE_NAME" => array(
                ),
                "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
                ),
                "PROPS_AUTOCOMPLETE_VETO" => "N",
                "SECTION_FIELDS_ENABLE" => "N",
                "SECTION_MAIL1" => "",
                "SECTION_MAIL_ALL" => "",
                "SEND_IMMEDIATE" => "Y",
                "SEND_MAIL" => "N",
                "SHOW_LINK_TO_SEND_MORE" => "Y",
                "SHOW_MESSAGE_LINK" => "Y",
                "USERMAIL_FROM" => "N",
                "USER_CONSENT" => "Y",
                "USER_CONSENT_ID" => "1",
                "USER_CONSENT_INPUT_LABEL" => "",
                "USER_CONSENT_IS_CHECKED" => "Y",
                "USER_CONSENT_IS_LOADED" => "N",
                "USE_CAPTCHA" => "N",
                "WIDTH_FORM" => "100%",
                "COMPONENT_TEMPLATE" => ".default"
            ),
	false
);?>
    </div>
</div>

<div id="pay" class="popup animated-modal" style="display: none;">
    <div class="popup__header">
        <h3 class="title">Оплата и доставка</h3>
    </div>
    <div class="popup__body content-scroll">
        <p class="pay__text">Приём заказов на сайте ведется непрерывно, все заказы, поступившие в выходные дни будут обработаны в ближайшие рабочие дни.</p>
        <p class="pay__text">Сборка и отправка от 3 до 5 рабочих дней с момента оплаты заказа!</p>
        <span class="blockquote">
            <b class="pay__text">ДОСТАВКА по РОССИИ.</b>
            <p class="pay__text">Минимальная сумма заказа 800 руб.</p>
            <p class="pay__text">Бесплатная Доставка* осуществляется Почтой РФ по всей  территории России из г. Новосибирска — для заказов от 1990 руб.</p>
            <p class="pay__text">Доставка заказов до 1990 руб. — 250 руб.</p>
            <b class="pay__text">Доставка по России осуществляется:</b>
            <p class="pay__text"> ·         Почтой России (в почтовое отделение) — <b>бесплатно</b> при заказе от 1990 руб.</p>
            <p class="pay__text">·         Транспортными Компаниями</p>
            <p class="pay__text"><b>СДЭК</b> — оплата по специальным сниженным тарифам транспортной компании.</p>
            <p class="pay__text"><b>Энергия, ПЭК, Деловые Линии, Кашалот</b>  до терминала в Вашем городе —  450 руб</p>
            <b class="pay__text">*Доставка в отдаленные регионы РФ осуществляется почтой России и оплачивается:</b>
            <p class="pay__text">250 руб. — для заказов от 1990 руб.</p>
            <p class="pay__text">500 руб.-  для заказов до 1990 руб.</p>
            <p class="pay__text">
                <u class="pay__text">Регионы с повышенными тарифами на доставку (отдаленные регионы):</u>
                Саха(Якутия)( искл. г. Якутск),
                Камчатский край (искл. г. Петропавловск-Камчатский),
                Приморский край,
                Хабаровский край (искл. г.Владивосток, Хабаровск),
                Амурская обл (искл. г. Благовещенск),
                Магаданская обл (искл. г. Магадан),
                Мурманская обл (искл. г.Мурманск),
                Сахалинская обл (искл. г. Южно-Сахалинск),
                Ненецкий АО, Чукотский АО,
                Ханты-Мансийский АО (искл. г. Ханты-Мансийск),
                Ямало-Ненецкий АО (искл. г.Салехард),
                г.Норильск.
            </p>
            <b class="pay__text">*Международная Доставка почтой России рассчитывается индивидуально в зависимости от страны назначения и габаритов заказа.</b>
            <b class="pay__text">Доставка г. Новосибирск:</b>
            <p class="pay__text">Бесплатная Курьерская Доставка заказов осуществляется только для заказов от 1990 руб. Для заказов менее 1990 руб — 300 рублей.</p>
            <p class="pay__text">Доставка в Первомайский, Советский р-ны, Пашино, г.Бердск, г.Обь, Краснообск, ОбьГЭС. — 450 руб, для всех заказов.</p>
            <b class="pay__text">Пункт Самовывоза:</b>
            <p class="pay__text">ул. Советская, 44.</p>
            <p class="pay__text">Ежедневно с 10.00 до 20.00 без обеда. 8-(383) 221-86-96</p>
            <p class="pay__text">Выдача заказа после согласования заказа с администратором интернет — магазина.</p>
            <b class="pay__text">Доставка г. Москва:</b>
            <p class="pay__text"><b class="pay__text">Пункт Самовывоза</b> – пер.Спартаковский д.2 с1 (подъезд 6, код 1#857)</p>
            <p class="pay__text">Ежедневно с 10.00 до 21.00 без обеда. 89252155300</p>
            <p class="pay__text">Выдача заказа после согласования заказа с администратором интернет — магазина.</p>
            <p class="pay__text">Доставка в пункты самовывоза бесплатная.</p>
            <b class="pay__text">ЗАРУБЕЖНАЯ ДОСТАВКА.</b>
            <p class="pay__text">Доставка заказов на сумму не менее 1990 руб.</p>
            <p class="pay__text"><b class="pay__text">Доставка Казахстан**.</b>Ориентировочный срок доставки от 5 до 15 дней.</p>
            <p class="pay__text">
                <b class="pay__text">Нур-Султан (Астана)</b> – 450 руб.,
                <b class="pay__text">Алматы</b> — 500 руб.,
                <b class="pay__text">Актобе</b> – 500 руб.,
                <b class="pay__text">Шымкент</b> – 770 руб.,
                <b class="pay__text">Павлодар</b> – 450 руб.,
                <b class="pay__text">Костанай</b> – 570 руб.,
                <b class="pay__text">Уральск</b> – 500 руб.,
                <b class="pay__text">Кызылорда</b> –900 руб.,
                <b class="pay__text">Атырау</b> – 990 руб.,
                <b class="pay__text">Караганда</b> – 650 руб.,
                <b class="pay__text">Усть-Каменогорск</b> – 450 руб.
            </p>
            <p class="pay__text">
                <b class="pay__text">Доставка Беларусь**.</b> Ориентировочный срок доставки от 8 до 15 дней.
            </p>
            <p class="pay__text">
                <b class="pay__text">Минск, Брест, Гродно, Гомель, Витебск, Могилев</b>  — 770 руб.
            </p>
            <p class="pay__text">
               **Предварительная стоимость доставки из
                расчета: вес груза — 3 кг., доставка до терминала в городе получателя. Услуги перевозки груза оказывает
                ТРАНСПОРТНАЯ КОМПАНИЯ «GTD»  Полную информацию о сроках и адресах терминалов выдачи в Вашем городе уточняйте на
                <a href="www.gtdel.com">www.gtdel.com</a>
            </p>
            <p class="pay__text">Доставка в Минск ТК СДЭК 1000 руб.</p>
            <b class="pay__text">Доставка в другие страны</b>
            <p class="pay__text">Рассчитывается индивидуально в зависимости от Страны, веса и габаритов заказа.</p>
            <p class="pay__text">Примерные тарифы доставкой Почтой РФ по МИРУ, для заказов до 3 кг — 1800 руб</p>
            <p class="pay__text">Обращаем Ваше внимание, мы оформляем таможенные документы в полном соответствии с установленными правилами.</p>
            <p class="pay__text">В случае, если заказ будет возвращен таможенными органами принимающей страны,без объяснения причин, возврат оплаты доставки не производится.</p>

            <b class="pay__text">Убедительная просьба, всю информацию указывать латинскими буквами!</b>
            <b class="pay__text">СПОСОБЫ ОПЛАТЫ:</b>
            <b class="pay__text">Для заказов с доставкой Почтой России и Транспортными компаниями:</b>

             <p class="pay__text">·         Online –оплата Visa/Mastercard</p>
             <p class="pay__text">·         Оплата Яндекс Деньги</p>
             <p class="pay__text">·         PayPal международные переводы</p>
             <p class="pay__text">·         Золотая Корона международные переводы (Казахстан).</p>

             <b class="pay__text">Для заказов с Курьерской Доставкой / Самовывоз Новосибирск, Москва:</b>

            <p class="pay__text">·         Оплата наличными при получении</p>
             <p class="pay__text">·         Online –оплата Visa/Mastercard</p>
             <p class="pay__text">·         Предварительная Оплата Яндекс Деньги.</p>
            </span>
    </div>
</div>

<div id="buy" class="popup animated-modal" style="display: none;">
    <div class="popup__header">
        <h3 class="title">Заказать</h3>
    </div>
    <div class="popup__body">
        <?$APPLICATION->IncludeComponent(
	"feedback.form", 
	".default",
            array(
                "ACTIVE_ELEMENT" => "Y",
                "ADD_HREF_LINK" => "Y",
                "ALX_LINK_POPUP" => "N",
                "BBC_MAIL" => "",
                "CAPTCHA_TYPE" => "default",
                "CATEGORY_SELECT_NAME" => "Выберите категорию",
                "CHANGE_CAPTCHA" => "N",
                "CHECKBOX_TYPE" => "CHECKBOX",
                "CHECK_ERROR" => "Y",
                "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
                "FB_TEXT_NAME" => "",
                "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
                "FORM_ID" => "1",
                "IBLOCK_ID" => "21",
                "IBLOCK_TYPE" => "system",
                "INPUT_APPEARENCE" => array(
                    0 => "DEFAULT",
                ),
                "JQUERY_EN" => "N",
                "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
                "LOCAL_REDIRECT_ENABLE" => "N",
                "MASKED_INPUT_PHONE" => array(
                ),
                "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
                "NAME_ELEMENT" => "NAME",
                "NOT_CAPTCHA_AUTH" => "Y",
                "PROPERTY_FIELDS" => array(
                    0 => "NAME",
                    1 => "PHONE",
                    2 => "EMAIL",
                ),
                "PROPERTY_FIELDS_REQUIRED" => array(
                    0 => "NAME",
                    1 => "PHONE",
                    2 => "EMAIL",
                ),
                "PROPS_AUTOCOMPLETE_EMAIL" => array(
                ),
                "PROPS_AUTOCOMPLETE_NAME" => array(
                ),
                "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
                ),
                "PROPS_AUTOCOMPLETE_VETO" => "N",
                "SECTION_FIELDS_ENABLE" => "N",
                "SECTION_MAIL1" => "",
                "SECTION_MAIL_ALL" => "",
                "SEND_IMMEDIATE" => "Y",
                "SEND_MAIL" => "N",
                "SHOW_LINK_TO_SEND_MORE" => "Y",
                "SHOW_MESSAGE_LINK" => "Y",
                "USERMAIL_FROM" => "N",
                "USER_CONSENT" => "Y",
                "USER_CONSENT_ID" => "1",
                "USER_CONSENT_INPUT_LABEL" => "",
                "USER_CONSENT_IS_CHECKED" => "Y",
                "USER_CONSENT_IS_LOADED" => "N",
                "USE_CAPTCHA" => "N",
                "WIDTH_FORM" => "100%",
                "COMPONENT_TEMPLATE" => ".default"
            ),
	false
);?>
    </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
