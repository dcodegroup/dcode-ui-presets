@extends('layouts.auth')
@section('content')
    <p>
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </p>
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

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button>☓</button>
        </header>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <fieldset>
            <x-field-wrapper fieldName="email" labelName="E-mail:">
                <input type="email" name="email" required autofocus value="{{ old('email') }}">
            </x-field-wrapper>
        </fieldset>
        <footer>
            <input type="submit" value="Email Password Reset Link" class="button success">
        </footer>
    </form>
@endsection
 
