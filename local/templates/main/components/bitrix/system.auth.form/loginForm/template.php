<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init();
?>
<?=
\TAO::frontend()->renderBlock(
    'common/loginform',
    [
	'arResult' => $arResult
    ]
)
?>
