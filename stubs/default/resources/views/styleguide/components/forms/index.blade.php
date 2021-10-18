@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Forms",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Generic Forms</h3>
        <p>Forms should not have classes or styles applied to them and should be kept agnostic.</p>
        <p><code>&lt;div&gt;</code> tags should wrap a label and input as a container.</p>
        <p><code>&lt;fieldset&gt;</code> tags can also be used for a container of these div containers.</p> 
        <p>Labels should not wrap inputs and a for attribute needs to be added to the label and the associated id added to the input.</p>
        <p>The only exception for this rule is for the checkbox and radio input elements. Those inputs can have a <code>label</code> container with a class of <code>.checkbox</code> or <code>.radio</code> to provide the custom styles to the associated element.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <div>
                    <label for="name">Enter your name: </label>
                    <input type="text" name="name" id="name" required placeholder="Add you name here.">
                    <small>The name field is required.</small>
                </div>
                <div>
                    <label for="email">Enter your email: </label>
                    <input type="email" name="email" id="email" required placeholder="Add you email here."
                    >
                    <small>The email field is required.</small>
                </div>
                <label for="mail-me" class="checkbox">
                    <input type="checkbox" id="mail-me" />
                    <span>Include marketing</span>
                </label>
                <footer>
                    <input type="submit" value="Sign up!" class="button success">
                    <a href="#" class="button">Cancel</a>
                </footer>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ " <form action=\"#\" method=\"post\">
                        <div>
                            <label for=\"name\">Enter your name: </label>
                            <input type=\"text\" name=\"name\" id=\"name\" required placeholder=\"Add you name here.\">
                            <small>The name field is required.</small>
                        </div>
                        <div>
                            <label for=\"email\">Enter your email: </label>
                            <input type=\"email\" name=\"email\" id=\"email\" required placeholder=\"Add you email here.\"
                            >
                            <small>The email field is required.</small>
                        </div>
                        <label for=\"mail-me\" class=\"checkbox\">
                            <input type=\"checkbox\" id=\"mail-me\" />
                            <span>Include marketing</span>
                        </label>
                        <footer>
                            <input type=\"submit\" value=\"Sign up!\" class=\"button success\">
                            <a href=\"#\" class=\"button\">Cancel</a>
                        </footer>
                    </form>" }}
                </code>
            </pre>
        </div>
        <hr>
        <h3>Error States</h3>
        <p>When form submissions does not pass validation, a generic error message should be presented to the user. In this example an alert component is added above the <code>form</code> element. Fields with an error should include the <code>.form-error</code> css class to the containing <code>div</code> tag.</p>
        <p>If there are errors for a form, the submit button should also be disabled until those errors are resolved.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <header class="alert danger">
                <div>
                    <span>&#9888;</span>
                    <small>There were issues with sending the form. Please see the errors below:</small>
                </div>
                <button>&#9747;</button>
            </header>
            <form action="#" method="post">
                <div class="form-error">
                    <label for="name">Enter your name: </label>
                    <input type="text" name="name" id="name" required placeholder="Add you name here.">
                    <small>The name field is required.</small>
                </div>
                <div>
                    <label for="email">Enter your email: </label>
                    <input type="email" name="email" id="email" required placeholder="Add you email here."
                    >
                    <small>The email field is required.</small>
                </div>
                <label for="mail-me" class="checkbox">
                    <input type="checkbox" id="mail-me" />
                    <span>Include marketing</span>
                </label>
                <footer>
                    <input type="submit" value="Sign up!" class="button -success" disabled>
                    <a href="#" class="button">Cancel</a>
                </footer>
            </form>
        </div>
    </div>
@endsection