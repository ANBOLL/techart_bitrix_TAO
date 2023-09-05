<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=9ef78e46-b791-4756-82ec-af9d6ef6be77" type="text/javascript"></script>
<div class="{{$block->elem('buttons')}}">
<button type="submit" id="tula" class="{{$block->elem('but')}} activebut" >Офис в Туле</button>
<button type="submit" id="moscow" class="{{$block->elem('but')}}" >Офис в Москве</button>
</div>
<div id="map" class="{{$block}}"></div>
<div id="mapmoscow" class="{{$block}} active"></div>

