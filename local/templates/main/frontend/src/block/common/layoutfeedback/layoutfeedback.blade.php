@foreach ($fields as $field => $data) @if ($component->fieldType($field) != 'hidden')
	<div class="tao-form-field tao-form-field-{{$field}}{{$data['error_class']}}">
		@if ($component->option('show_labels'))
			<div class="caption"><label for=" {{$field}} "> {{$data['caption']}}:</label></div>
		@endif
        @php
        $placeholder = $data['NAME'];
        $name = $data["code"];
        @endphp
        @if ($data["processed_type"] == 'input')
        {!! $renderer->renderBlock('form/input', ['name' => $name, 'placeholder' => $placeholder, 'type' => 'text']) !!}
        @else
        {!! $renderer->renderBlock('form/select', ['items' => $data["ITEMS"], 'name' => $name]) !!}
        @endif
	</div>
    @endif
@endforeach

{!! $renderer->renderBlock('form/button', ['arr' => $component->option('submit_text') , 'type' => 'submit']) !!}
