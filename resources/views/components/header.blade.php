<header class="header">
    <div class="container">
        <div class="d-flex justify-content-between">
            <x-application-logo />
            <nav class="" x-data="{ open: false }">
                <ul class="d-flex list-unstyled mx-n3">
                    <!-- Navigation Links -->
                    <li class="mx-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('posts.index') }}" :active="">
                            {{ __('Blog') }}
                        </a>
                    </li>
                    @if (Auth::user())

                    <li class="mx-3">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>

                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                        @endif
                </ul>
            </nav>
        </div>
    </div>
</header
