<nav class="custom-wrapper" id="menu">
    <div class="pure-menu"></div>
    <ul class="container-flex list-unstyled">
        <li><a href="{{ route('pages.home') }}" class="text-uppercase {{ setActiveRoute('pages.home') }}">{{ __('app.navbar.home') }}</a></li>
        <li><a href="{{ route('pages.about') }}" class="text-uppercase {{ setActiveRoute('pages.about') }}">{{ __('app.navbar.about') }}</a></li>
        <li><a href="{{ route('pages.archive') }}" class="text-uppercase {{ setActiveRoute('pages.archive') }}">{{ __('app.navbar.archive') }}</a></li>
        <li><a href="{{ route('pages.contact') }}" class="text-uppercase {{ setActiveRoute('pages.contact') }}">{{ __('app.navbar.contact') }}</a></li>
        @guest()
        <li><a href="{{ route('login') }}" class="text-uppercase {{ setActiveRoute('login') }}">{{ __('app.navbar.login') }}</a></li>
        <li><a href="{{ route('register') }}" class="text-uppercase {{ setActiveRoute('register') }}">{{ __('app.navbar.register') }}</a></li>
        @endguest
        @auth()
            @if(!auth()->user()->hasRole('Default'))
                <a href="{{route('dashboard')}}" class="btn btn-default">{{__('app.navbar.dashboard')}}</a>
                @endif
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-default">{{__('app.navbar.logout')}} </button>
            </form>
        @endauth

        <li class="nav-item">
            <a href="{{ route('set_language', ['es']) }}"
            class="dropdown-item">
                {{ strtoupper(__('menu.spain')) }}
            </a>
        </li>
        <li>
            <a href="{{ route('set_language', ['en']) }}"
               class="dropdown-item">
                {{ strtoupper(__('menu.english')) }}
            </a>
        </li>
    </ul>
</nav>
