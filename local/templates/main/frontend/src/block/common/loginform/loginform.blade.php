<div class="{{ $block }}">
    @if($arResult["USER_NAME"])
        <div class="{{ $block->elem('formlogin') }}">
            <form>
                <table width="100%">
                    <tr>
                        <td align="center">
                            {{$arResult["USER_NAME"]}}</br>
                            {{-- [{{$arResult["USER_LOGIN"]}}] --}}
                        </td>
                    </tr>
                    <tr >
                        <td align="center">
                            @foreach ($arResult["GET"] as $key => $value)
                                <input type="hidden" name="{{$key}}" value="{{$value}}" />
                            @endforeach
                                {!!bitrix_sessid_post()!!}
                                <input type="hidden" name="logout" value="yes" />
                                {!! $renderer->renderBlock('form/button' , ['arr' => GetMessage("AUTH_LOGOUT_BUTTON"), 'type' => 'submit']) !!}
                                {{-- <input class="{{ $block->elem('autorize') }}" type="submit" name="logout_butt" value="{{GetMessage("AUTH_LOGOUT_BUTTON")}}" /> --}}
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    @endif
    @if($arResult["USER_NAME"] == false)
        <div class="{{ $block->elem('formlogin') }}">
            <a href="/" id="but"><h4>Авторизация</h4></a>
        </div>
    @endif
</div>