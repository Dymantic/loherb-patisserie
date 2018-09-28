@extends('front.base')

@section('content')
{{ trans('menu.title') }}

    @foreach(data('menu.sections', []) as $section)
    <p><a href="/menu/{{ $section['url'] }}">{{ trans($section['name']) }}</a></p>
    @endforeach
@endsection