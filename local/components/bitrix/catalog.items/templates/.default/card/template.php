<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>
<?=
\TAO::frontend()->renderBlock(
'catalog/catalogtop',
[
'arResult' => $arResult,
'arParams' => $arParams,
'itemIds' => $itemIds,
'showSlider' => $showSlider,
'item' => $item,
'discountPositionClass' => $discountPositionClass,
'price' => $price,
'productTitle' => $productTitle,
'haveOffers' => $haveOffers,
'measureRatio' => $measureRatio,
'minOffer' => $minOffer,
'buttonSizeClass' => $buttonSizeClass
]
)
?>





		