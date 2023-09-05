<div class="{{ $block }}">
        @if (!empty($arResult))
        <ul class="{{ $block->elem('item')->mod('multilevel')  }}">
        @php
        $previousLevel = 0;
        @endphp
        @foreach ($arResult as $arItem)
            @if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel)
               {!! str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])) !!}
            @endif
                @if ($arItem["IS_PARENT"])
                    @if ($arItem["DEPTH_LEVEL"] == 1)
                        <li><a href="{{$arItem["LINK"]}}" class="{{ $block->elem('listmenu') }} @if($arItem["SELECTED"]){{$block->elem('listmenu')->mod('active')}}@endif"><h4>{{$arItem["TEXT"]}}</h4></a>
                        <ul>
                    @else
                        <li  class="@if ($arItem["SELECTED"]){{ $block->elem('selected') }}@endif"><a href="{{$arItem["LINK"]}}" class="">{{$arItem["TEXT"]}}</a>
                        <ul>
                    @endif
                @else
                    @if ($arItem["PERMISSION"] > "D")
                        @if ($arItem["DEPTH_LEVEL"] == 1)
                            <li><a href="{{$arItem["LINK"]}}" class="{{ $block->elem('listmenu') }} @if($arItem["SELECTED"]){{$block->elem('listmenu')->mod('active')}}@endif"><h4>{{$arItem["TEXT"]}}</h4></a></li>
                        @else
                            <li class="@if ($arItem["SELECTED"]){{ $block->elem('selected') }}@endif"><a href="{{$arItem["LINK"]}}">{{$arItem["TEXT"]}}</a></li>
                        @endif
                    @else
                        @if ($arItem["DEPTH_LEVEL"] == 1)
                            <li><a href="" class="@if ($arItem["SELECTED"]){{ $block->elem('listmenu') }}@else{{$block->elem('listmenu')->mod('active')}}@endif" title="{{GetMessage("MENU_ITEM_ACCESS_DENIED")}}"><h4>{{$arItem["TEXT"]}}</h4></a></li>
                        @else
                            <li><a href="" class="denied" title="{{GetMessage("MENU_ITEM_ACCESS_DENIED")}}">{{$arItem["TEXT"]}}</a></li>
                        @endif
                    @endif
                @endif
            @php
            $previousLevel = $arItem["DEPTH_LEVEL"];
            @endphp
        @endforeach
        @if ($previousLevel > 1)
            {!! str_repeat("</ul></li>", ($previousLevel-1) ) !!}
        @endif
        </ul>
        @endif
</div>
<div class="{{ $block->elem('hight')}}">
    <div class="topnav" id="myTopnav">
        @foreach ($arResult as $arItem)
        @if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel)
           {!! str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])) !!}
        @endif
            @if ($arItem["IS_PARENT"])
                @if ($arItem["DEPTH_LEVEL"] == 1)
                    <a href="{{$arItem["LINK"]}}" class="{{ $block->elem('listmenu') }} @if($arItem["SELECTED"]){{$block->elem('listmenu')->mod('active')}}@endif"><h4>{{$arItem["TEXT"]}}</h4></a>
                    
                @else
                    <a href="{{$arItem["LINK"]}}" class="">{{$arItem["TEXT"]}}</a>
                    <ul>
                @endif
            @else
                @if ($arItem["PERMISSION"] > "D")
                    @if ($arItem["DEPTH_LEVEL"] == 1)
                            <a href="{{$arItem["LINK"]}}" class="{{ $block->elem('listmenu') }} @if($arItem["SELECTED"]){{$block->elem('listmenu')->mod('active')}}@endif"><h4>{{$arItem["TEXT"]}}</h4></a>
                        @else
                            <a id="hight_block_a" class="{{$block->elem('Ablocknone')}}" href="{{$arItem["LINK"]}}">{{$arItem["TEXT"]}}</a>
                    @endif
                @else
                    @if ($arItem["DEPTH_LEVEL"] == 1)
                        <a href="" class="@if ($arItem["SELECTED"]){{ $block->elem('listmenu') }}@else{{$block->elem('listmenu')->mod('active')}}@endif" title="{{GetMessage("MENU_ITEM_ACCESS_DENIED")}}"><h4>{{$arItem["TEXT"]}}</h4></a>
                    @else
                        <a href="" class="denied" title="{{GetMessage("MENU_ITEM_ACCESS_DENIED")}}">{{$arItem["TEXT"]}}</a>
                    @endif
                @endif
            @endif
        @php
        $previousLevel = $arItem["DEPTH_LEVEL"];
        @endphp
        @endforeach
        <a href="javascript:void(0);" class="icon cl-btn-7" onclick="myFunction()">
        </a>
    </div>
</div>