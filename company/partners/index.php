<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнеры");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"partners", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"COMPONENT_TEMPLATE" => "partners",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"IBLOCK_ID" => "43",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/company/partners/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "LINK_REGION",
			1 => "SITE",
			2 => "PHONE",
			3 => "LINK_PROJECTS",
			4 => "LINK_SERVICES",
			5 => "EMAIL",
			6 => "DOCUMENTS",
			7 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"USE_SHARE" => "Y",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DETAIL_TEXT",
			5 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_REGION",
			1 => "SITE",
			2 => "PHONE",
			3 => "LINK_PROJECTS",
			4 => "LINK_SERVICES",
			5 => "EMAIL",
			6 => "STATUS",
			7 => "ARTICLE",
			8 => "PRICE",
			9 => "PRICEOLD",
			10 => "FILTER_PRICE",
			11 => "ECONOMY",
			12 => "RECOMMEND",
			13 => "FORM_QUESTION",
			14 => "FORM_ORDER",
			15 => "BEST_ITEM",
			16 => "BRAND",
			17 => "PRICE_CURRENCY",
			18 => "DATE_COUNTER",
			19 => "HIT",
			20 => "DEPTH",
			21 => "GRUZ_STRELI",
			22 => "GRUZ",
			23 => "DLINA_STRELI",
			24 => "VOLUME",
			25 => "WIDTH_PROHOD",
			26 => "WIDTH_PROEZD",
			27 => "DLINA_STRELI",
			28 => "SPEED",
			29 => "DOCUMENTS",
			30 => "",
		),
		"T_DOCS" => "",
		"DOCS_PROP_CODE" => "DOCUMENTS",
		"T_PROJECTS" => "",
		"T_SERVICES" => "",
		"T_COMMENTS" => "",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BLOCKS_ORDER" => "docs,projects,services,comments",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Партнеры",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"COMMENTS_COUNT" => "5",
		"DETAIL_BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_VK_USE" => "Y",
		"DETAIL_VK_TITLE" => "Вконтакте",
		"DETAIL_VK_API_ID" => "API_ID",
		"DETAIL_FB_USE" => "Y",
		"DETAIL_FB_TITLE" => "Facebook",
		"DETAIL_FB_APP_ID" => "API_ID",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>