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
</div>
@endsection

{{-- ToDo: other features worth including: https://www.lightningdesignsystem.com/components/buttons/ 
    Eg: including Icons, Disabled states, fulll width
--}}