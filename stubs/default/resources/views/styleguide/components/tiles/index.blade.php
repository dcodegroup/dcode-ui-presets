@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
        'heading' => "Tiles",
        'devReady' => false,
])

<div class="content">
    <h3>Tiles</h3>
    <p>Adding an <code>.tile</code> class will create a flex container which is align-center justify-content properties.
    </p>
    <p>Using the <code>.bg-COLOR </code> classes provides the background-colour and border-color to the container
        element and the button color as well.</p>
    <hr>
    <h3>HTML Demo</h3>
    <div class="demo">
        <div class="tile">
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
        </div>
        <div class="tile bg-primary">
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
        </div>
        <div class="tile bg-secondary">
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eveniet?</small>
        </div>
        <div class="tile bg-success">
            <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, explicabo?</small>
        </div>
        <div class="tile bg-warning">
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, iusto!</small>
        </div>
        <div class="tile bg-danger">
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quisquam.</small>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <div class="demo">
      <pre>
        <code>
           {{ 
            "<div class=\"tile\">
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptatum!</small>
            </div>"
            }}
        </code>
      </pre>
    </div>
</div>
@endsection
