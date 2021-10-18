@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
'heading' => "Buttons",
'devReady' => false,
])

<div class="content">
    <h3>About buttons</h3>
    <p>Buttons should be used in situations where users might need to:</p>
        <ul>
            <li>submit a form</li>
            <li>begin a new task</li>
            <li>trigger a new UI element to appear on the page</li>
            <li>specify a new or next step in a process</li>
        </ul>
    <hr>
    <h3>Button vs. Link</h3>
    <p>The HTML elements for buttons and links describe a very specific type of action that is going to be taken when they are used. It is important to know the distinction between them:</p>
    <ul>
        <li>A link should be used when navigating to another page.</li>
        <li>Buttons should be used when performing an action, such as: "submit," "merge," "create new," "upload," etc.</li>
        <li>An action is usually on the same page.</li>
    </ul>
    <hr>
    <h3>Demo</h3>
    <div class="demo">
        <div>
            <p>Generic Buttons</p>
            <a href="#" class="button">Generic button</a>
            <a href="#" class="button primary">Button Primary</a>
            <a href="#" class="button secondary">Button Secondary</a>
            <a href="#" class="button success">Button Success</a>
            <hr>
        </div>
        <div>
            <p>Hollow Buttons</p>
            <a href="#" class="button -hollow">Button Hollow</a>
            <a href="#" class="button -hollow -success">Button Hollow Success</a>
            <hr>
        </div>
        <div>
            <p>Small Buttons</p>
            <a href="#" class="button sml">Small Button </a>
        </div>
    </div>
    <hr>
    <h3>Buttons with Icons</h3>
    <p>Included as an option is the ability to add icons to buttons using the <code>icon-right</code> or <code>icon-left</code> css classes. Nesting either an <code> &lt;i&gt;, &lt;span&gt; or &lt;svg&gt; </code> element, to display the icon is supported.</p>
    <div class="demo">
        <a href="#" class="button icon-left">Add List 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
            </svg>
        </a>
        <a href="#" class="button icon-right">View Tasks 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
            </svg>
        </a>
        <a href="#" class="button -hollow -success icon-right">View Tasks 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
            </svg>
        </a>
    </div>
    <hr>
    <h3>Button groups</h3>
    <p>These can be created using a container with the class of <code>.btn-group</code> and works with both .button and .checkbox-btn elements.</p>
    <div class="demo">
        <div class="btn-group">
            <a href="#" class="button">Generic button</a>
            <a href="#" class="button primary">Button Primary</a>
            <a href="#" class="button secondary">Button Secondary</a>
            <a href="#" class="button success">Button Success</a>
        </div>
    </div>
</div>
@endsection

{{-- ToDo: other features worth including: https://www.lightningdesignsystem.com/components/buttons/ 
    Eg: Disabled states, fulll width
--}}