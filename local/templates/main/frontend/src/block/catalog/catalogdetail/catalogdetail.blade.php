<div class="{{$block}}" id="{!!$itemIds['ID']!!}" itemscope itemtype="http://schema.org/Product">
	<h1 class="{{$block->elem('h1_books_detail')}}">{!!$name!!}</h1>
    
	<div class="{{$block->elem('img_books_detail')}}">
		<div id="{!!$itemIds['BIG_SLIDER_ID']!!}" data-entity="images-container">
			<img src="{{$actualItem['MORE_PHOTO'][0]['SRC']}}" alt="{{$alt}}" title="{{$title}}"{!!($key == 0 ? ' itemprop="image"' : '')!!}>
		</div>
		<div class="{{$block->elem('discont_detail')}}">
			@if ($price['DISCOUNT'] > 0)
				<div class="{{$block->elem('element_sale_circal')}}" id="{!!$itemIds['DISCOUNT_PERCENT_ID']!!}" title="{!!-$price['PERCENT']!!}%">
                    <span>{{-$price['PERCENT']}}%</span>
				</div>
			@endif
		</div>
	</div>
	<div class="{{$block->elem('price_detail_block')}}">
		<div class="{{$block->elem('prise_old')}}" id="{{$itemIds['OLD_PRICE_ID']}}" >
			{!!($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '')!!}
		</div>
		<div class="{{$block->elem('prise_actual')}}" id="{!!$itemIds['PRICE_ID']!!}">
			{!!$price['PRINT_RATIO_PRICE']!!}
		</div>
        <div class="{{$block->elem('prise_discont')}}" id="{{$itemIds['OLD_PRICE_ID']}}" >
			@if ($showDiscount)
			    {!! Bitrix\Main\Localization\Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT']))!!}
		    @endif
		</div>
		<div id="{{$itemIds['BASKET_ACTIONS_ID']}}">
			<a class="{{$block->elem('button_buy')}}" id="{{$itemIds['ADD_BASKET_LINK']}}" href="javascript:void(0);">
				{!!$arParams['MESS_BTN_ADD_TO_BASKET']!!}
			</a>
		</div>
	</div>
	<div class="{{$block->elem('detail_book_content')}}">
		{!!$arResult['DETAIL_TEXT_TYPE'] === 'html' ? $arResult['DETAIL_TEXT'] : '<p>'.$arResult['DETAIL_TEXT'].'</p>'!!}
	</div>
	<dl class="{{$block->elem('item_books_detail')}}">
		@foreach ($arResult['DISPLAY_PROPERTIES'] as $property)
			<dt>{{$property['NAME']}}:</dt>
			<dd>{!!(
				is_array($property['DISPLAY_VALUE'])
				? implode(' / ', $property['DISPLAY_VALUE'])
				: $property['DISPLAY_VALUE']
				)!!}
			</dd>
        @endforeach
	</dl>
</div>