@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
    'heading' => "Colours",
    'devReady' => false,
    ])

<div class="content">
    <h3>Rational</h3>
    <p>Included in the styleguide is a palette of colours.</p>
    <p>The primary colour is used for interactive elements, such as links and buttons. The secondary, success, warning,
        and danger colours are used to give more context to UI elements and actions.</p>
    <hr>
    <div class="demo">

        <div class="cols-of-150 ">
            <div class="colour-block">
                <div class="bg-primary"></div>
                <p class="text-primary">Primary</p>
            </div>
            <div class="colour-block">
                <div class="bg-secondary"></div>
                <p class="text-secondary">Secondary</p>
            </div>
            <div class="colour-block">
                <div class="bg-success"></div>
                <p class="text-success">Success</p>
            </div>
            <div class="colour-block">
                <div class="bg-warning"></div>
                <p class="text-warning">Warning</p>
            </div>
            <div class="colour-block">
                <div class="bg-danger"></div>
                <p class="text-danger">Danger</p>
            </div>
        </div>
        <hr>
        <div class="cols-of-150">
            <div class="colour-block">
                <div class="bg-medium-gray"></div>
                <p class="text-medium-gray">Medium Gray</p>
            </div>
            <div class="colour-block">
                <div class="bg-dark-gray"></div>
                <p class="text-dark-gray">Dark Gray</p>
            </div>
            <div class="colour-block">
                <div class="bg-black"></div>
                <p class="text-black">Black</p>
            </div>
            <div class="colour-block bg-dark-gray">
                <div class="bg-light-gray"></div>
                <p class="text-light-gray">Light Gray</p>
            </div>
            <div class="colour-block bg-dark-gray">
                <div class="bg-off-white"></div>
                <p class="text-off-white">Off White</p>
            </div>
            <div class="colour-block bg-black">
                <div class="bg-white"></div>
                <p class="text-white">White</p>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Look to the Foundation color settings for extra features to include: https://get.foundation/sites/docs/global.html --}}
