@if($arResult["forbidden"])
<div class="{{$block}}">
	<div class="{{$block->elem('page_navigation_link')}}">
		<p class="{{$block->elem('page_navigation_link_p')}}">
			<a href="/news/">Главная</a> &nbsp;/&nbsp;{{$arResult["NAME"]}}
		</p>
	</div>
	<div class="{{$block->elem('page_hero')}}">
		<h1 class="{{$block->elem('page_hero_h1')}}">
			{!!$arResult["NAME"]!!}
		</h1>
	</div>
	<div class="{{$block->elem('page_block_news')}}">
		<div class="{{$block->elem('left_block_news')}}">
			<div class="{{$block->elem('left_block_news_data')}}">
				@if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"])
					{{$arResult["DISPLAY_ACTIVE_FROM"]}}
				@endif
			</div>
			<div class="{{$block->elem('left_block_news_content')}}">
				@if($arResult["NAV_RESULT"])
                    @if($arParams["DISPLAY_TOP_PAGER"])
                        {{$arResult["NAV_STRING"]}}
                    @endif
				        {{$arResult["NAV_TEXT"]}}
                    @if($arParams["DISPLAY_BOTTOM_PAGER"])
                        {{$arResult["NAV_STRING"]}}
                    @endif
				@elseif($arResult["DETAIL_TEXT"] <> '')
					{!!$arResult["DETAIL_TEXT"]!!}
				@else
					{!!$arResult["PREVIEW_TEXT"]!!}
				@endif
			</div>			
			<div class="{{$block->elem('theme')}}">
               @php
               $arr = $arResult['DISPLAY_PROPERTIES']["THEME"]['DISPLAY_VALUE'];
               @endphp
					<p>
                        @if (is_array($arr))
                            {!!"Темы: "; echo implode(", ", $arr);!!}
                        @else
                            {!!"Тема: "; echo $arr;!!}
                        @endif
					</p>
			</div>
			<a href="/news/" class="{{$block->elem('a_style_button')}}">
				<div class="{{$block->elem('left_block_news_button')}}">
					<div class="{{$block->elem('arrow_button_page')}}"></div>назад к новостям
				</div>
			</a>
		</div>
        <div class="{{$block->elem('right_block_news')}}">
            @if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"]))
                <img
                    border="0"
                    src="{!!$arResult["DETAIL_PICTURE"]["SRC"]!!}"
                    width="{!!$arResult["DETAIL_PICTURE"]["WIDTH"]!!}"
                    height="{!!$arResult["DETAIL_PICTURE"]["HEIGHT"]!!}"
                    alt="{!!$arResult["DETAIL_PICTURE"]["ALT"]!!}"
                    title="{!!$arResult["DETAIL_PICTURE"]["TITLE"]!!}"
                    />
            @endif			
        </div>
	</div>
</div>
@endif
@if($arResult["forbidden"] == false)
    <section class="{{$block->elem('login')}}">
        <h1 class="{{$block->elem('forbidden')}}">
            Доступ запрещен для неавторизованных пользователей! 
        </h1>
        <form class="{{$block->elem('ui-form')}}" name="system_auth_form{!!$arResult["RND"]!!}" method="post" target="_top" action="{!!$arResult["AUTH_URL"]!!}">
            <h3>Вход</h3>
            <input type="hidden" name="AUTH_FORM" value="Y" />
            <input type="hidden" name="TYPE" value="AUTH" />
            <div class="{{$block->elem('form-row')}}">
                <input type="text" id="email" name="USER_LOGIN" maxlength="50" value="" size="17" required autocomplete="off"/><label for="email">Логин</label>
            </div>
            <div class="{{$block->elem('form-row')}}">
                <input type="password"  id="password" name="USER_PASSWORD" maxlength="255" size="17" required autocomplete="off" /><label for="password">Пароль</label>
            </div>
            <input class="{{$block->elem('button_forms_autorize')}}" type="submit" name="Login" value="{{GetMessage("AUTH_LOGIN_BUTTON")}}" />
        </form>
    </section>
@endif