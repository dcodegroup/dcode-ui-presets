@extends('layouts.app', [
    'bodyClass' => 'layout-admin'
])
@section('header')
    @include('admin.sections.navigation')
@endsection
@section('content')
    <section>
        <header>
            <h2>
                {{ $user->exists ? __('Edit user') : __('Create user') }}
            </h2>
        </header>
        <form method="post" action="{{ $user->exists ? route('admin.users.update', $user) : route('admin.users.store') }}">
            @csrf
            @if($user->exists)
                @method('put')
            @endif
            <fieldset>
                <x-field-wrapper fieldName="name" labelName="Full Name">
                    {{-- ToDo: Add placeholders --}}
                    <input type="text" name="name" placeholder="" value="{{ old('name', $user->name) }}">
                </x-field-wrapper>
                <x-field-wrapper fieldName="email" labelName="Email address">
                    <input type="email" name="email" placeholder="" value="{{ old('email', $user->email) }}">
                </x-field-wrapper>
            </fieldset>
            <fieldset>
                <x-field-wrapper fieldName="password" labelName="Password">
                    <input type="password" name="password" placeholder="">
                </x-field-wrapper>
                <x-field-wrapper fieldName="password_confirmation" labelName="Password confirmation">
                    <input type="password" name="password_confirmation"  placeholder="">
                </x-field-wrapper>
                <label class="checkbox" for="is_admin">
                    <input type="hidden" name="is_admin" value="0" />
                    <input type="checkbox" name="is_admin" id="is_admin" value="1"
                    @if(old('is_admin', $user->isAdmin()))checked=""@endif
                    >
                    <span>Is Admin</span>
                </label>
            </fieldset>
            <footer>
                <a href="{{ route('admin.users.index') }}" class="button">Cancel</a>
                <input type="submit" value="{{ __('generic.buttons.save') }}" class="button success">
            </footer>
        </form>
    </section>
@endsection
