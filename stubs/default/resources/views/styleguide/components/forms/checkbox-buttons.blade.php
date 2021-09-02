@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Checkbox Buttons",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Checkbox Buttons</h3>
        <p>Adding the css class <code>.checkbox-btn</code> to a container div for child checkbox inputs and span elements will generate the checkbox button.</p>
        <p>The background colour for the element can be changed by including a <code>.bg-COLOR</code> class to the label container.</p>
        <p>The text color property and the checked state colors are not affected by the <code>.bg-COLOR</code> class.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <label for="option-one" class="checkbox-btn">
                    <input type="checkbox" id="option-one" />
                    <span>Option 1</span>
                </label>
                <label for="option-two" class="checkbox-btn bg-warning">
                    <input type="checkbox" id="option-two" />
                    <span>Option 2</span>
                </label>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<form action=\"#\" method=\"post\">
                        <label for=\"option-one\" class=\"checkbox-btn\">
                            <input type=\"checkbox\" id=\"option-one\" />
                            <span>Option 1</span>
                        </label>
                        <label for=\"option-two\" class=\"checkbox-btn bg-warning\">
                            <input type=\"checkbox\" id=\"option-two\" />
                            <span>Option 2</span>
                        </label>
                    </form>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection


{{-- Ideas for extra features to include for checkboxes can be seen here: https://www.lightningdesignsystem.com/components/checkbox-button/#site-main-content --}}