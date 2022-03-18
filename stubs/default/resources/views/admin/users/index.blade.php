@extends('layouts.app', [
    'bodyClass' => 'layout-admin'
])
@section('header')
    @include('admin.sections.navigation')
@endsection
@section('content')
    <section>
        <header>
            <h2>{{ __('Users') }}</h2>
            <div>
                <a class="button primary" href="#">Create User</a>
                <v-search
                    search-field="name"
                ></v-search>
            </div>
        </header>
        <p>The vue component to display users is commented out below...</p>
        {{-- <base-table get-url="{{ route('admin.api.users.index') }}" :fields="{{ json_encode($fields) }}"></base-table> --}}
    </section>
@endsection
 
