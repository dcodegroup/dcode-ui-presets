@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
    'heading' => "Breakpoints",
    'devReady' => true,
])

<div class="content">
    <h3>About breakpoints</h3>
    <p>A breakpoints map is available for media queries to be included. See below:</p>
    <p>These breakpoint settings can be modified to suit the needs of a designed layout.</p>
    <hr>
    <h3>Demo</h3>
    <div class="demo">
        <pre>
            <code>
             {{
                 "\$breakpoints: (
                     xs: 350px,
                     sm: 480px,
                     md: 764px,
                     lg: 1024px,
                     xl: 1400px,
                     ) !default;"
            }}  
            </code>
        </pre>
    </div>
    <hr>
    <h3>Breakpoint @mixins</h3>
    <p>There are various mixins which can be used based on these breakpoint settings. The most commonly used mixins are below:</p>
    <ul>
        <li>@mixin media-breakpoint-up($name, $breakpoints: $breakpoints)</li>
        <li>@mixin media-breakpoint-down($name, $breakpoints: $breakpoints)</li>
        <li>@mixin media-breakpoint-only($name, $breakpoints: $breakpoints)</li>
    </ul>
</div>
@endsection