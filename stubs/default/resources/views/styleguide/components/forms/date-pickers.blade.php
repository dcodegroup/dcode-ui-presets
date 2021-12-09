@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Date Pickers",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Vue Date Pickers</h3>
        <p>We have created a wrapper for the Vue 2 Datepicker which has a hidden input to help with sending form submissions in blades. More details about the package can be found <a href="https://github.com/mengxiong10/vue2-datepicker" target="blank">here</a>.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <v-date-picker name="due_date" value="{{ Carbon\Carbon::now() }}"></v-date-picker>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<v-date-picker name=\"due_date\" value=\"{\{ Carbon\Carbon::now() }\}\"></v-date-picker>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection

