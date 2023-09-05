<div class="{{$block->elem('hiden-swiper-horisontal')}}">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
        @foreach($newsSwiper as $rows)
            @php $test = new \TAO\File($rows["PREVIEW_PICTURE"]); @endphp
            <div class="swiper-slide" >
                <a href="{!!$rows["DETAIL_PAGE_URL"]!!}">
                <div class="{{$block->elem('hero_section')}}">
                    <div class="{{$block->elem('hero_image')}}">
                        <img alt="hero_image" src="<?=$test?>">
                    </div>
                    <div class="{{$block->elem('hero_text')}}">
                        <h1 class="{{$block->elem('hero_h1')}}">{{$rows["NAME"]}}</h1>
                        <?=$rows["PREVIEW_TEXT"]?>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
        </div>
    </div>
</div>

<div class="{{$block->elem('hiden-swiper-vertical')}}">
    @foreach($newsSwiper as $rows)
        @php $test = new \TAO\File($rows["PREVIEW_PICTURE"]); @endphp
        <a href="{!!$rows["DETAIL_PAGE_URL"]!!}">
            <div class="{{$block->elem('hero_section')}}">
                <div class="{{$block->elem('hero_image')}}">
                    <img alt="hero_image" src="<?=$test?>">
                </div>
                <div class="{{$block->elem('hero_text')}}">
                    <h1 class="{{$block->elem('hero_h1')}}">{{$rows["NAME"]}}</h1>
                    <?=$rows["PREVIEW_TEXT"]?>
                </div>
            </div>
        </a>
    @endforeach
</div>


