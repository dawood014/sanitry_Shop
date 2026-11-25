<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('head')
    <title>@yield('title', config('app.name'))</title>
    @hasSection('meta_description')
        <meta name="description" content="@yield('meta_description')">
    @endif
    <link rel="stylesheet" href="{{ asset('ay-electronics/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @stack('styles')
</head>

<body class="@yield('body_class')">
    <!-- LOADER -->
    <div id="ldr">
        <div class="lb">AY <span>Electronics</span>
            <div class="lbar"></div>
        </div>
    </div>
    <div id="sb"></div>

   @unless(($websiteHideAnnouncement ?? false) || request()->routeIs('login'))
        <div class="ann">
            @hasSection('announcement')
                @yield('announcement')
            @else
                <i class="fas fa-tag"></i> Summer Sale! Up to <span>20% OFF</span> on ACs &amp; Fridges!
                @if(\Illuminate\Support\Facades\Route::has('website.offers'))
    <a href="{{ route('website.offers') }}">Shop Now &rarr;</a>
@endif
            @endif
        </div>
    @endunless

    @unless(request()->routeIs('login'))
    @include('website.partials.nav')
@endunless

    <main>
        @yield('content')
    </main>

   @unless(($websiteHideFooter ?? false) || request()->routeIs('login'))
        @include('website.partials.footer')
    @endunless

    <a href="https://wa.me/923001234567?text=Hello!%20Interested%20in%20your%20products." class="fwa" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
    <button class="btt" id="btt" type="button"><i class="fas fa-arrow-up"></i></button>

    <script src="{{ asset('ay-electronics/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
