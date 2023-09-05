{{-- <div class="{{$block->elem('hero_section')}}">
	<div class="{{$block->elem('hero_image')}}">
 		<img alt="hero_image" src="/local/templates/main/assets/image/{{$arResult["ITEMS"][0]["PREVIEW_PICTURE"]["ORIGINAL_NAME"];}}">
	</div>
	<div class="{{$block->elem('hero_text')}}">
        @if ($arParams["DISPLAY_TOP_PAGER"])
            {{$arResult["NAV_STRING"]}}
        @endif
        @foreach($arResult["ITEMS"] as $arItem)
            @php
                $comp->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $comp->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            @endphp
            @if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"])
                @if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]))
                    <h1 class="{{$block->elem('hero_h1')}}">{{$arItem["NAME"]}}</h1>
                @else
                    {{$arItem["NAME"]}}
                @endif
            @endif
            @if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"])
                {!!$arItem["PREVIEW_TEXT"]!!}
            @endif
        @endforeach
    </div>
    
</div> --}}

{!! $renderer->renderBlock('swiper/swiper', ['newsSwiper' => $newsSwiper]) !!}