@extends('layouts.auth')
@section('content')
    <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
    @if($errors->any())
        <header class="alert danger">
            <div>
                <span>⚠</span>
                <small>{{ __('Whoops! Something went wrong.') }}</small>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button>☓</button>
        </header>
    @endif
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <fieldset>
            <x-field-wrapper fieldName="password" labelName="Password:">
                <input type="password" name="password" required autocomplete="current-password">
            </x-field-wrapper>
        </fieldset>
        <footer>
            <input type="submit" value="Confirm" class="button success">
        </footer>
    </form>
    @endsection

