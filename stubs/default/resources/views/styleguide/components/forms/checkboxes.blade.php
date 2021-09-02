@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Checkbox",
        'devReady' => true,
    ])
    <div class="content">
        <h3>Generic Checkboxes</h3>
        <p></p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <label for="mail-me" class="checkbox">
                    <input type="checkbox" id="mail-me" />
                    <span>Include marketing</span>
                </label>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<form action=\"#\" method=\"post\">
                        <label for=\"mail-me\" class=\"checkbox\">
                            <input type=\"checkbox\" id=\"mail-me\" />
                            <span>Include marketing</span>
                        </label>
                    </form>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection