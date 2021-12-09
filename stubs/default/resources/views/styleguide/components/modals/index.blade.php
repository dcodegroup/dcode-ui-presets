@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Modals",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Vue Modals</h3>
        <p>A component for creating modals is available as a starting point. The <code>ModalWrapper</code> component takes a componentName, componentData and a callback.</p>
        <p>The options available can be seen in on this page with vue dev tools for the Modal component.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <delete-modal-trigger></delete-modal-trigger>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<delete-modal-trigger></delete-modal-trigger>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection