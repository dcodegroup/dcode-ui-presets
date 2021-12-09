@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Side Panels",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Vue Side Panels</h3>
        <p>A component for creating side panels is available as a starting point. The <code>SidePanel</code> component like the <code>ModalWrapper</code>  takes a componentName and componentData.</p>
        <p>The options available can be seen in on this page with vue dev tools for the Modal component.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <job-panel-trigger></job-panel-trigger>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<job-panel-trigger></job-panel-trigger>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection