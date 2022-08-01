<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="{{ __('metas.keywords') }}" name="keywords">
    <meta content="{{ __('metas.description') }}" name="description">
    @yield('facebook')
    @yield('twitter')
    @sectionMissing('facebook')
    @include('layouts.socials.facebook')
    @endif
    @sectionMissing('twitter')
    @include('layouts.socials.instagram')
    @endif
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/apple.png') }}" rel="apple-touch-icon">
    <title>{{ __('commons.app.name')}} || @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="cf">
    <div id="app">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    @guest
    @include('auth.login.modal')
    @endguest
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>

</html>