<div class="fixed pin-t w-full flex justify-between items-center h-12 px-4 main-nav bg-charcoal hover:bg-charcoal font-medium">
    <div>
        <a href="{{ localUrl("/") }}" tabindex="1" class="flex items-center h-12 ml-4">
            @include('svgs.logos.simple')
        </a>
    </div>
    <nav class="flex justify-end items-stretch font-sans h-12 nav-list bg-charcoal md:bg-transparent">


        <div class="flex items-center my-2 md:my-0 nav-link-box">
            <a class="flex items-center nav-link text-white" tabindex="5" href="{{ localUrl('/journal') }}">{{ trans('navbar.blog') }}</a>
        </div>
        <div class="flex items-center my-2 md:my-0 nav-link-box">
            <a class="flex items-center nav-link text-white" tabindex="5" href="{{ localUrl('/contact') }}">{{ trans('navbar.contact') }}</a>
        </div>
        <div class="flex items-center my-2 md:my-0 nav-link-box">
            <a class="flex items-center nav-link text-white" tabindex="6" href="{{ transUrl(Request::path()) }}">{{ trans('navbar.lang') }}</a>
        </div>
    </nav>
    <div class="md:hidden" id="nav-trigger">
        <span class="text-gold flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-current"><path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
        </span>
    </div>
</div>