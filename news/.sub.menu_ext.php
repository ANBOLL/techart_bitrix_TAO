<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$rows = \TAO::infoblock('themes')->getRows($args);
$aMenuLinksExt = Array();
foreach($rows as $row){
    array_push($aMenuLinksExt, array($row["NAME"], $row["DETAIL_PAGE_URL"]));
}
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>