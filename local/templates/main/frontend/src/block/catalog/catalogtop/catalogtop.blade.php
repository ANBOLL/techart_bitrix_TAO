<div class="product-item {{$block}}" id="{{$itemIds['PICT_SLIDER']}}" data-slider-interval="{{$arParams['SLIDER_INTERVAL']}}" data-slider-wrap="true">
    <a href="{{$item['DETAIL_PAGE_URL']}}"  data-entity="image-wrapper" id="{{$itemIds['SECOND_PICT']}}">
        <img src="{!!$item['PREVIEW_PICTURE']['SRC']!!}" style="{!!($showSlider ? 'display: none;' : '')!!}">
    </a>
    <div class="{{$block->elem('discont_circal')}}">
        @if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y')
            <div class="{{$block->elem('circal_sale')}} {{$discountPositionClass}}" id="{{$itemIds['DSC_PERC']}}"
                {!!($price['PERCENT'] > 0 ? '' : 'style="display: none;"')!!}>
                <span>{{-$price['PERCENT']}}%</span>
            </div>
        @endif
    </div>
    <h2 class="{{$block->elem('titles_boks_top')}}">
        <a href="{{$item['DETAIL_PAGE_URL']}}" title="{!!$productTitle!!}">{!!$productTitle!!}</a>
    </h2>
    <div class="{{$block->elem('price_books_top')}}">
        @if ($arParams['SHOW_OLD_PRICE'] === 'Y')
            <span class="product-item-price-old" id="{{$itemIds['PRICE_OLD']}}"
            {!!($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '')!!}>
                {!!$price['PRINT_RATIO_BASE_PRICE']!!}
            </span>&nbsp;
        @endif
        <span class="product-item-price-current" id="{{$itemIds['PRICE']}}">
            @if (!empty($price))
                @if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers)
                    {!!\Bitrix\Main\Localization\Loc::getMessage(
                    'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                    array(
                    '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                    '#VALUE#' => $measureRatio,
                    '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                    )
                    )!!}
                @else
                    {!!$price['PRINT_RATIO_PRICE']!!}
                @endif
            @endif
        </span>
        </div>
    <div class="product-item-info-container product-item-hidden" data-entity="props-block">
        <dl class="product-item-properties">
            @foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
                <dt {!!(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')!!}>
                    {{$displayProperty['NAME']}}
                </dt>
                <dd {!!(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')!!}>
                    {!!(is_array($displayProperty['DISPLAY_VALUE'])
                    ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                    : $displayProperty['DISPLAY_VALUE'])!!}
                </dd>
            @endforeach
        </dl>
    </div>
    <div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
    <div class="product-item-button-container" id="{{$itemIds['BASKET_ACTIONS']}}">
        <a class="{{$block->elem('btns')}} btn-default {{$buttonSizeClass}}" id="{{$itemIds['BUY_LINK']}}"
        href="javascript:void(0)" rel="nofollow">
        {!!($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])!!}
        </a>
    </div>
    </div>
 </div>
