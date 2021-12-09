@extends('layouts.base')

@section('body')
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
@endsection
