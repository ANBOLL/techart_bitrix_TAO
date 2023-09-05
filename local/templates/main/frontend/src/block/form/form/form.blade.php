<div class="{{ $block }}">
    <form action="{{$arResult["FORM_ACTION"]}}" class="{{$block->elem('formwidth')}}">
    {!!$suggest!!}{!! $renderer->renderBlock('form/button', ['arr' => GetMessage("BSF_T_SEARCH_BUTTON"), 'type' => 'submit']) !!}
    </form>
</div>
