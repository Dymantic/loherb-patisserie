<div class="flex justify-between items-center h-12">
    <div>Cuisine</div>
    <nav class="flex justify-end items-center">
        <a class="no-underline mx-4" href="{{ localUrl('/') }}">{{ trans('navbar.home') }}</a>
        <a class="no-underline mx-4" href="{{ localUrl('/about') }}">{{ trans('navbar.about') }}</a>
        <a class="no-underline mx-4" href="{{ localUrl('/menu') }}">{{ trans('navbar.menu') }}</a>
        <a class="no-underline mx-4" href="{{ localUrl('/blog') }}">{{ trans('navbar.blog') }}</a>
        <a class="no-underline mx-4" href="{{ localUrl('/contact') }}">{{ trans('navbar.contact') }}</a>
        <a class="no-underline mx-4" href="{{ transUrl(Request::path()) }}">{{ trans('navbar.lang') }}</a>
    </nav>
</div>