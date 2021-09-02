@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Alerts",
        'devReady' => false,
    ])

    <div class="content">
        <h3>Alerts</h3>
        <p>Adding an <code>.alert</code> class will create a flex container which is align-center justify-content properties.</p>
        <p>Using the <code>.bg-COLOR </code> classes provides the background-colour and border-color to the container element and the button color as well.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <header class="alert primary">
                <div>
                    <span>&#8505;</span>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert secondary">
                <div>
                    <span>&#9872;</span>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eveniet?</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert success">
                <div>
                    <span>&#10003;</span>
                    <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, explicabo?</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert warning">
                <div>
                    <span>&#10029;</span>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, iusto!</small>
                </div>
                <button>&#9747;</button>
            </header>
            <header class="alert danger">
                <div>
                    <span>&#9888;</span>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quisquam.</small>
                </div>
                <button>&#9747;</button>
            </header>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<header class=\"alert primary\">
                        <div>
                            <span>&#8505;</span>
                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
                        </div>
                        <button>&#9747;</button>
                    </header>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection