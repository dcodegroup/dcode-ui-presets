@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
    'heading' => "Flex Cols",
    'devReady' => false,
])

<div class="content">
    <h3>About flex cols</h3>
    <p>A mixin for generating the flex columns is available. <code>@mixin flex-cols($breakpoint: xs);</code></p>
    <p>By defining the columns in the $columns map, we can create flex layouts which are defined by the ammount of columns set.</p>
    <p>The key values match up with the <a href="{{ route('styleguide.layouts.breakpoints') }}">breakpoints map</a> to define the layout depending on the breakpoint width.</p>
    <div class="demo">
        <pre>
            <code>
{{ "
\$columns: (
  xs: (
    columns: 7,
  ),

  sm: (
    columns: 2,
  ),

  lg: (
    columns: 12,
  )
) !default;"
            }}
            </code>
        </pre>
    </div>
    <hr>
    <h3>Demo</h3>
    <p>The below demo is a 12 column flex column layout with a <code>.space-between</code> css class included.</p>
    <div class="demo">
        <div class="flex-cols justify-between">
            <div class="lg-4 ">Large 4</div>
            <div class="lg-2 ">Large 2</div>
            <div class="lg-2 ">Large 2</div>
            <div class="lg-3 ">large 3</div>
            <div class="lg-5 ">large 5</div>
            <div class="lg-6 ">large 6</div>
         </div>
    </div>
    <hr>
    <h3>Flex col alignment helpers</h3>
    <p>There is a list of flex helpers which can be added to the flex container which are listed below:</p>
    <div class="demo">
        <pre>
            <code>
{{".justify-between {
    justify-content: space-between;
}
.justify-start {
    justify-content: flex-start;
}
.justify-end {
    justify-content: flex-end;
}
.align-center {
    align-content: center;
}
.align-top {
    align-content: flex-start;
}
.align-bottom {
    align-content: flex-end;
}
.no-wrap {
    flex-wrap: nowrap;
}"}}
   
            </code>
        </pre>
    </div>
   
 </div>

@endsection
