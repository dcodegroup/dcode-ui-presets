@extends('layouts.styleguide')
@php($data = json_encode([
    (object)[
        'id' => 0,
        'name' => 'Apples',
    ],
    (object)[
        'id' => 1,
        'name' => 'Bananas',
    ],
    (object)[
        'id' => 1,
        'name' => 'Carrots',
    ],
]))
@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Multi Selects",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Vue Multi Selects</h3>
        <p>We have created a wrapper for the Vue Selectize which has a hidden input to help with sending form submissions in blades. More details about the package can be found <a href="https://github.com/isneezy/vue-selectize" target="blank">here</a>.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <v-select :multi="true" inputName="products" :options="{{ $data }}"></v-select>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
                    {{ "<v-select :multi=\"true\" inputName=\"products\" :options=\"{\{ \$data }\}\"></v-select>" }}
                </code>
            </pre>
        </div>
    </div>
@endsection

