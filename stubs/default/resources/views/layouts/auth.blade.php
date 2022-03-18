<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.partials.html-head')
        @section('head-section')
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endsection
    @endcomponent
</html>
<body {{isset($bodyId) ? "id=$bodyId" : null }} class="layout-auth route-{{ request()->route() ? str_replace('.', '-', request()->route()->getName()) : 'null' }}">
    <main>
        <h1>
            <img src="{{ asset('/imgs/logos/dcode.svg') }}" alt="Dcode logo" width="55"/>
            <span>{{ config('app.name') }}</span>
        </h1>
        <section>
            @yield('content')
        </section>
    </main>
    <script type="text/javascript" src="{{ asset('js/auth.js') }}"></script>
</body>
</html>