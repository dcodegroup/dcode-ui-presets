@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
'heading' => "Tags",
'devReady' => false,
])

<div class="content">
    <h3>About Tags</h3>
    <p>Tags are useful inline elements that can be used to explain sections or to attach metadata. You can attach a tag that indicates when something needs attention.</p>
    <p>Tags are created with the <code>.tag</code> class. Using the <code>.bg-COLOR </code> and or <code>.text-COLOR</code> classes provides the background colour to these badges.</p>
     <div class="demo">
        <p aria-describedby="genericTag"><b>Note:</b> This task needs to be actioned</p>
        <div class="cols-of-50">
            <div>
                <div class="tag" id="genericTag">Generic tag</div>
            </div>
            <div>
                <div class="tag bg-primary">tag bg-primary</div>
             </div>
            <div>
                <div class="tag bg-secondary">tag bg-secondary</div>
             </div>
            <div>
                <div class="tag bg-success">tag bg-success</div>
             </div>
            <div>
                <div class="tag bg-warning">tag bg-warning</div>
             </div>
            <div>
                <div class="tag bg-danger">tag bg-danger</div>
             </div>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <div class="demo">
      <pre>
        <code>
           {{ 
            "<p aria-describedby=\"genericTag\"><b>Note:</b> This task needs to be actioned</p>
            <div class=\"tag\" id=\"genericTag\">Generic tag</div>"
            }}
        </code>
      </pre>
    </div>
    <hr>
    <h3>Hollow Tags</h3>
    <p>Using the <code>.hollow-COLOR </code>classes provides the background colour to these badges.</p>
    <div class="demo">
        <p aria-describedby="primaryTag"><b>Note:</b> This task needs to be actioned</p>
        <div class="cols-of-50">
            <div>
                <div class="tag hollow-light-gray" >tag hollow-light-gray</div>
             </div>
            <div>
                <div class="tag hollow-primary" id="prmiaryTag">tag hollow-primary</div>
             </div>
            <div>
                <div class="tag hollow-secondary">tag hollow-secondary</div>
             </div>
            <div>
                <div class="tag hollow-success">tag hollow-success</div>
             </div>
            <div>
                <div class="tag hollow-warning">tag hollow-warning</div>
             </div>
            <div>
                <div class="tag hollow-danger">tag hollow-danger</div>
             </div>
        </div>
    </div>
</div>
@endsection

{{-- ToDo: We will probably want to support icons as well --}}