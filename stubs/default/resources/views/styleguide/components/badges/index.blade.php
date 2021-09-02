@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
'heading' => "Badges",
'devReady' => false,
])
<div class="content">
    <h3>Generic Badges</h3>
    <p>Generic badges are created with the <code>.badge</code> class.</p>
    <p>Using the <code>.bg-COLOR </code> and or <code>.text-COLOR</code> classes provides the background colour to these badges.</p>
    <p>The generic badge does not support text content.</p>
    <hr>
    <div class="demo">
        <div class="cols-of-50">
            <div>
                <div class="badge bg-primary"></div>
                <p class="text-primary">badge bg-primary</p>
            </div>
            <div>
                <div class="badge bg-secondary"></div>
                <p class="text-secondary">badge bg-secondary</p>
            </div>
            <div>
                <div class="badge bg-success"></div>
                <p class="text-success">badge bg-success</p>
            </div>
            <div>
                <div class="badge bg-warning"></div>
                <p class="text-warning">badge bg-warning</p>
            </div>
            <div>
                <div class="badge bg-danger"></div>
                <p class="text-danger">badge bg-danger</p>
            </div>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <div class="demo">
        <pre>
            <code>
                {{ "<div class=\"badge bg-primary\"></div>" }}
            </code>
        </pre>
    </div>
    <hr>
    <h3>Meta Badges</h3>
    <p>Meta badges are used to display single characters of information.</p>
    <p>These badges are created with the <code>.badge.meta</code> classes.</p>
    <hr>
    <div class="demo">
        <div class="cols-of-50 ">
            <div>
                <div class="badge bg-primary meta">1</div>
                <p class="text-primary">badge bg-primary meta</p>
            </div>
            <div>
                <div class="badge bg-secondary meta">2</div>
                <p class="text-secondary">badge bg-secondary meta</p>
            </div>
            <div>
                <div class="badge bg-success meta">3</div>
                <p class="text-success">badge bg-success meta</p>
            </div>
            <div>
                <div class="badge bg-warning meta">4</div>
                <p class="text-warning">badge bg-warning meta</p>
            </div>
            <div>
                <div class="badge bg-danger meta">5</div>
                <p class="text-danger">badge bg-danger meta</p>
            </div>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <div class="demo">
        <pre>
            <code>
                {{ "<div class=\"badge bg-primary meta\">1</div>" }}
            </code>
        </pre>
    </div>
    <hr>
    <h3>Box Badges</h3>
    <p>Box badges are used to display single characters of information.</p>
    <p>These badges are created with the <code>.badge.box</code> classes.</p>
    <hr>
    <div class="demo">
        <div class="cols-of-50 ">
            <div>
                <div class="badge bg-primary box">A</div>
                <p class="text-primary">badge bg-primary box</p>
            </div>
            <div>
                <div class="badge bg-secondary box">B</div>
                <p class="text-secondary">badge bg-secondary box</p>
            </div>
            <div>
                <div class="badge bg-success box">C</div>
                <p class="text-success">badge bg-success box</p>
            </div>
            <div>
                <div class="badge bg-warning box">D</div>
                <p class="text-warning">badge bg-warning box</p>
            </div>
            <div>
                <div class="badge bg-danger box">E</div>
                <p class="text-danger">badge bg-danger box</p>
            </div>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <div class="demo">
        <pre>
            <code>
                {{ "<div class=\"badge bg-primary box\">A</div>" }}
            </code>
        </pre>
    </div>
    

  
  
</div>
@endsection
