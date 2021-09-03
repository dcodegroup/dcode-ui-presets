@extends('layouts.styleguide')

@section('content')
@include('styleguide.partials.content-header', [
    'heading' => "Flex Cols",
    'devReady' => false,
])

<div class="content">
    <h3>About flex cols</h3>
    <p>A helper mixin for generating the flex columns is available called <code>flex-cols($breakpoint: xs);</code></p>
    <p>By defining the columns in a $columns map, we can create flex layouts with predefined columns.</p>
    <p>The map's key values, match up with the <a href="{{ route('styleguide.layouts.breakpoints') }}">breakpoints map</a> and define the number of columns for those breakpoints.</p>
    <div class="demo">
        <pre>
            <code>
{{ "
\$columns: (
    xs: (
    columns: 2,
    gutter: 16,
  ),
  sm: (
    columns: 6,
    gutter: 12,
  ),
  lg: (
    columns: 12,
    gutter: 8,
  )
) !default;"
            }}
            </code>
        </pre>
    </div>
    <hr>
    <h3>Demo</h3>
    <p>The below demo is a large 12 column flex column layout with a <code>.justify-between</code> css class included.</p>
    <div class="demo">
        <div class="flex-cols justify-between">
            <div class="lg-4">Large 4</div>
            <div class="lg-2">Large 2</div>
             <div class="lg-3">large 3</div>
            <div class="lg-1">large 1</div>

            <div class="lg-5 ">large 5</div>
            <div class="lg-6 ">large 6</div>
         </div>
    </div>
    <hr>
    <h3>Flex col's margins & padding</h3>
    <p>Each child element of a has padding and margin class helpers named <code>.padd</code> and <code>.mrg</code></p>
    <p>These classes will add a left and right padding or margin value based on the gutter settings defined in the $columns map seen above.</p>
    <hr>
    <h3>Demo</h3>
    <p>The below demo has both the <code>.padd</code> and the<code>.mrg</code> css classes included.</p>
    <div class="demo">
        <div class="flex-cols">
            <div class="lg-4 padd mrg">Large 4</div>
            <div class="lg-2 padd mrg">Large 2</div>
            <div class="lg-2 padd mrg">Large 2</div>
            <div class="lg-3 padd mrg">large 3</div>
            <div class="lg-1 padd mrg">large 1</div>
            <div class="lg-5 padd mrg">large 5</div>
            <div class="lg-6 padd mrg">large 6</div>
         </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <p>Below is the @flex-cols settings used for the demo:</p>
    <div class="demo">
        <pre>
            <code>
{{ "
.flex-cols {
    @'include flex-cols(lg);
    > div {
        background-color: \$dcode-turquoise;
        border: 1px solid #fff;
        color: #fff;
        min-height: 100px;
        // padding: 1rem;
        margin-bottom: 1rem;
    }
}" }}
            </code>
        </pre>
    </div>
    <hr>

    <h3>Flex col alignment helpers</h3>
    <p>There is a list of flex css class helpers which can be added to the flex container. These are listed below:</p>
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
