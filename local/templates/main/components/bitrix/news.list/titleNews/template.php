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
<?php

$newsSwiper = \TAO::infoblock('news')->getRows(array(
    'order' => array(
        "ACTIVE_FROM" => "DESC",
    ),
    'filter' => array(
    ),
    'page' => 1,
    'per_page' => 5,
)); 

?>

<?=
\TAO::frontend()->renderBlock(
    'news/titlenews',
    [
	'arResult' => $arResult,
	'arParams' => $arParams,
	'comp' => $this,
    'newsSwiper' => $newsSwiper
    ]
)
?>

