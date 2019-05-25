<?
/**
 * @global CMain $APPLICATION
 */
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services.main", 
        array(
            "COMPONENT_TEMPLATE" => "services.main",
            "IBLOCK_TYPE" => "septic_master",
            "IBLOCK_ID" => "2",
            "NEWS_COUNT" => "5",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "PRICE_CURRENT",
                1 => "PRICE_BEFORE",
                2 => "CURRENCY",
                3 => "TAPE",
                4 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "STRICT_SECTION_CHECK" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SET_STATUS_404" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        ),
        false
    );?>

    <div class="main-page__block">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "main.page.articles", Array(
                "IBLOCK_TYPE" => "septic_master",	// Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "1",	// Код информационного блока
                "COMPONENT_TEMPLATE" => ".default",
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "FILTER_NAME" => "",	// Фильтр
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SHOW_404" => "N",	// Показ специальной страницы
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            ),
            false
        );?>
        <div class="main-page__about">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "about",
                array(
                    "COMPONENT_TEMPLATE" => "about",
                    "IBLOCK_TYPE" => "septic_master",
                    "IBLOCK_ID" => "1",
                    "ELEMENT_ID" => "",
                    "ELEMENT_CODE" => "about",
                    "CHECK_DATES" => "Y",
                    "FIELD_CODE" => array(),
                    "PROPERTY_CODE" => array(),
                    "IBLOCK_URL" => "",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y",
                    "SET_TITLE" => "Y",
                    "SET_CANONICAL_URL" => "N",
                    "SET_BROWSER_TITLE" => "Y",
                    "BROWSER_TITLE" => "-",
                    "SET_META_KEYWORDS" => "Y",
                    "META_KEYWORDS" => "-",
                    "SET_META_DESCRIPTION" => "Y",
                    "META_DESCRIPTION" => "-",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "USE_PERMISSIONS" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "USE_SHARE" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Страница",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            );?>
        </div>
    </div>
    <div class="main-page__sale">
        <h3>Продажа оборудования</h3>
        <div class="main-page__sale-links">
            <ul class="sale-links">
                <li class="sale-links__item">
                    <a href="#" class="sale-links__item-link">
                        <div class="sale-links__thmb"><img src="<?=SITE_TEMPLATE_PATH?>/images/sale/1.png" alt=""/></div>
                        <span>Купить септик</span>
                    </a>
                </li>
                <li class="sale-links__item">
                    <a href="#" class="sale-links__item-link">
                        <div class="sale-links__thmb"><img src="<?=SITE_TEMPLATE_PATH?>/images/sale/2.png" alt=""/></div>
                        <span>Компрессор для септика</span>
                    </a>
                </li>
                <li class="sale-links__item">
                    <a href="#" class="sale-links__item-link">
                        <div class="sale-links__thmb"><img src="<?=SITE_TEMPLATE_PATH?>/images/sale/3.png" alt=""/></div>
                        <span>Блоки управления для септиков</span>
                    </a>
                </li>
                <li class="sale-links__item">
                    <a href="#" class="sale-links__item-link">
                        <div class="sale-links__thmb"><img src="<?=SITE_TEMPLATE_PATH?>/images/sale/4.png" alt=""/></div>
                        <span>Поплавковые переключатели</span>
                    </a>
                </li>
                <li class="sale-links__item">
                    <a href="#" class="sale-links__item-link">
                        <div class="sale-links__thmb"><img src="<?=SITE_TEMPLATE_PATH?>/images/sale/5.png" alt=""/></div>
                        <span>Насосы для септиков</span>
                    </a>
                </li>
                <li class="sale-links__item">
                    <a href="#" class="sale-links__item-link">
                        <div class="sale-links__thmb"><img src="<?=SITE_TEMPLATE_PATH?>/images/sale/6.png" alt=""/></div>
                        <span>Электромагнитные клапана</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>