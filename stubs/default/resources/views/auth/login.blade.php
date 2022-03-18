@extends('layouts.auth')
@section('content')
    @if (session('status'))
        <header class="alert success">
            <div>
                <span>✓</span>
                <small>{{ session('status') }}</small>
            </div>
            <button>☓</button>
        </header>
    @endif
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
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <fieldset>
            <x-field-wrapper fieldName="email" labelName="E-mail:">
                <input type="email" name="email" id="email" required autofocus value="{{ old('email') }}">
            </x-field-wrapper>
            <x-field-wrapper fieldName="password" labelName="Password:">
                <input type="password" name="password" id="password" required autocomplete="current-password">
            </x-field-wrapper>
            <label for="remember_me" class="checkbox">
                <input type="checkbox" id="remember_me" />
                <span>{{ __('Remember me') }}</span>
            </label>
        </fieldset>
        <footer>
            <input type="submit" value="Login" class="button success">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </footer>
    </form>
@endsection
 
