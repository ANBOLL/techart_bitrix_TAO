<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? 
$themeCode = $_GET['CODE'];
$arrTheme = $arResult["THEME_LIST"][$themeCode]; 
?>
<?=
\TAO::frontend()->renderBlock(
    'news/newslist',
    [
	'arResult' => $arResult,
	'arParams' => $arParams,
	'arrTheme' => $arrTheme,
	'themeCode' => $themeCode,
	'APPLICATION' => $APPLICATION,
	'comp' => $this
    ]
)
?>
