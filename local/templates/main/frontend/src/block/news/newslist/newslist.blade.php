<section class="{{$block->elem('news_title')}}">
    @if (in_array($arrTheme, $arResult["THEME_LIST"]))
    <h2 class="{{$block->elem('news_title_h2')}}">Новости по теме {{$arrTheme;}}</h2>
    {!!$APPLICATION->SetTitle($arrTheme)!!}
    @elseif (!isset($themeCode))
    <h2 class="{{$block->elem('news_title_h2')}}">Новости</h2>
    {!!$APPLICATION->SetTitle("NEWS");!!}
    @endif
    </section>
    <div class="{{$block->elem('news_block')}}">
        @if($arParams["DISPLAY_TOP_PAGER"])
            {{$arResult["NAV_STRING"]}}
        @endif
        @foreach($arResult["ITEMS"] as $arItem)
        @foreach($arResult["NEWS"] as $valueID)
            @if ($arItem["ID"] == $valueID)     
            @php
                $comp->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $comp->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            @endphp
            <div class="{{$block->elem('news')}}">
                @if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"])
                    <div class="{{$block->elem('data_news')}}">
                        {{$arItem["DISPLAY_ACTIVE_FROM"]}}
                    </div>
                @endif
                @if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"])
                @if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"]))
                    <div class="{{$block->elem('title_news')}}">
                        {{$arItem["NAME"]}}
                    </div>
                @else
                    {{$arItem["NAME"]}}
                @endif
                @endif
                @if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"])
                <div class="{{$block->elem('announce_news')}}">
                    {!!$arItem["PREVIEW_TEXT"]!!}
                </div>
                @endif
                @if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"]))
                @endif
                @foreach($arItem["FIELDS"] as $code=>$value)
                    <small>
                        {!!GetMessage("IBLOCK_FIELD_".$code)!!}:&nbsp;{{$value;}}
                    </small>
                @endforeach
    
                @foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty)
                    <small>
                    {{$arProperty["NAME"]}}:&nbsp;
                    @if(is_array($arProperty["DISPLAY_VALUE"]))
                        {!!implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"])!!}
                    @else
                        {{$arProperty["DISPLAY_VALUE"]}}
                    @endif
                    </small>
                @endforeach
                <a href="/news/{{$arItem["ID"]}}/" class="{{$block->elem('a_style_button')}}">
                    <div class="{{$block->elem('button_news')}}">
                        Подробнее<div class="{{$block->elem('arrow_button')}}"></div>
                    </div>
                </a>
            </div>
            @endif
    @endforeach
    @endforeach
    </div>
    @if($arParams["DISPLAY_BOTTOM_PAGER"])
        {!!$arResult["NAV_STRING"]!!}
    @endif
