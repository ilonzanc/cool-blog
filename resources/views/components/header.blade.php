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
                    <li class="mx-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header
