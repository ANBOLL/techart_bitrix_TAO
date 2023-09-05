<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?
$rows = \TAO::infoblock('themes')->getRows($args);
foreach($rows as $row){
    $themeList[$row['CODE']] = $row['NAME'];
}
$arResult["THEME_LIST"] = $themeList;