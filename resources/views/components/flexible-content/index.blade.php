@foreach ($layouts as $layout)
    <x-dynamic-component component="{{ $layout['id'] }}" :data="$layout['data']" />
@endforeach
