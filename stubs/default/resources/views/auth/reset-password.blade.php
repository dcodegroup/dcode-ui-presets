<x-auth-layout>
    @section('content')
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
        <form method="POST" action="{{ route('password.update') }}">
        @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <fieldset>
                <x-field-wrapper fieldName="email" labelName="E-mail:">
                    <input type="email" name="email" required autofocus value="{{ old('email', $request->email) }}">
                </x-field-wrapper>
                <x-field-wrapper fieldName="password" labelName="Password:">
                    <input type="password" name="password" required autocomplete="current-password">
                </x-field-wrapper>
                <x-field-wrapper fieldName="password_confirmation" labelName="Password:">
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </x-field-wrapper>
            </fieldset>
            <footer>
                <input type="submit" value="{{ __('Reset Password') }}" class="button success">
            </footer>
        </form>
    @endsection
</x-auth-layout>
