<div>
    <h1>
        <a href="#">
            <img src="{{ asset('/imgs/logos/dcode.svg') }}" alt="Dcode logo" width="35"/>
            <span>{{ config('app.name') }}</span>
        </a>
    </h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.users.index') }}"  @if(request()->routeIs('admin.users*')) class="active" @endif>
                    {{ __('Users') }}
                </a>
            </li>
            {{-- ToDo: Add extra menu items here. --}}
        </ul>
    </nav>
    <nav>
        <ul>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="button -hollow -dark-gray">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>
