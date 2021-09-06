@extends('layouts.styleguide')

@section('content')
    @include('styleguide.partials.content-header', [
        'heading' => "Date Pickers",
        'devReady' => false,
    ])
    <div class="content">
        <h3>Date Pickers</h3>
        <p>Included is the generic date input.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <div>
                    <label for="start_date">Start Date</label>
                    <input type="date" id="start_date" />
                </div>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <div class="demo">
            <pre>
                <code>
   
                </code>
            </pre>
        </div>
    </div>
@endsection

{{-- ToDo: Do we add vue-datepicker for this input? --}}