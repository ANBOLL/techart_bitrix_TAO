<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$rows = \TAO::infoblock('themes')->getRows($args);
foreach ($rows as $row) {
    $themeList[$row['CODE']] = $row['NAME'];
}
$arResult["THEME_LIST"] = $themeList;

$news = \TAO::infoblock('news');

if ($USER->IsAuthorized()):

$rows = $news->getRows(array(
    'order' => array(
        "SORT" => "ASC"
),));
foreach ($rows as $row) {
    $NewsList[$row['ID']] = $row['ID'];
}
$arResult["NEWS"] = $NewsList;
endif;


if (!$USER->IsAuthorized()):
$rows = $news->getRows(array(
    'order' => array(
        "SORT" => "ASC"
    ),
    'filter' => array(
        "PROPERTY_access" => 4
    ),
));
foreach ($rows as $row) {
    $NewsList[$row['ID']] = $row['ID'];
}
$arResult["NEWS"] = $NewsList;
endif;
