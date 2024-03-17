@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-page', 'partials.content'])
        <x-flexible-content />
    @endwhile
@endsection
