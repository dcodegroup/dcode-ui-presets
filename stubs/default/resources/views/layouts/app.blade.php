<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.partials.html-head')
        @section('head-section')
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endsection
    @endcomponent
</html>
<body {{isset($bodyId) ? "id=$bodyId" : null }}>
    <div id="app">
        <header>
            @yield('header')
        </header>
        <main>
            @yield('content')
            @isset($slot)
                {{ $slot }}
            @endisset
        </main>
        <modal></modal>
        <side-panel></side-panel>
    </div>
    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
</body>
</html>
