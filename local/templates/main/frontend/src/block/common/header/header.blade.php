
<div class="{{ $block }}">
    <a href="/news/" class="{{ $block->elem('a') }}">
        <div class="{{ $block->elem('logo') }}">
            <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/logo.svg" alt="logo" class="{{ $block->elem('logo-img') }}">
            <p class="{{ $block->elem('logo-text') }}">Галактический<br>вестник</p>
        </div>
    </a>
    <div class="{{ $block->elem('navigation') }}">
        {!!$multilevel!!}
    </div>
    <div class="{{ $block->elem('navigation') }}">
        {!!$loginForm!!}
    </div>
    <div class="{{ $block->elem('navigation') }}">
        {!!$search!!}
    </div>    
</div>