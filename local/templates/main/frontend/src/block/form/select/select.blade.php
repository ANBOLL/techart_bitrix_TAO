<select class="{{$block}}" name="{{$name}}">
		<option class="{{$block->elem('item')}}" value="Без темы">(Без темы)</option>
		@foreach ($items as $key => $value)
			<option class="{{$block->elem('item')}}" value="{!!$key!!}">{!!$value!!}</option>';
		@endforeach
</select>	