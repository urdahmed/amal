<header class="fixed-top">
    <nav class="navbar navbar-expand py-0">
        <div class="container bg-primary border-bottom border-secondary border-3 shadow">
            <ul class="navbar-nav px-0 dropdown">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{Route::is('courses.*')?'active':''}} text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="userDropdownDropdown">
                        <li><a class="dropdown-item" href="#">{{ __('menus.auth.profile')}}</a></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('menus.auth.logout')}}</a></li>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                @else
                <li class="hf nav-item">
                    <a class="nav-link small text-white" href="#" data-bs-toggle="modal" data-bs-target="{{Route::is('guest.user.login')?'':'#loginmodal'}}">
                        <i class="fas fa-user"></i>
                        <span>{{ __('menus.auth.login')}}</span>
                    </a>
                </li>
                @endauth
            </ul>
            <span class="navbar-text text-white d-none d-sm-inline">
                <i class="fas fa-phone"></i>
                <span>{{ __('commons.app.phone') }}</span>
                <i class="fas fa-clock"></i>
                <span>{{ __('commons.app.openning')}}</span>
            </span>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm py-0">
        <div class="container bg-light navbar-light border-bottom border-secondary border-5 shadow py-1">
            <a class="navbar-brand hf fw-bold" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="AMAL-SCHOOL" height="55" width="90" class="d-inline-block align-text-middle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon text-primary"></span>
            </button>
            <div class="collapse navbar-collapse hf" id="mainmenu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('home')?'active':''}}" href="{{ route('home') }}">{{ __('menus.commons.home')}}</a>
                    </li>
                    @foreach(array_reverse(config('amal.levels')) as $menu)
                    @if(empty($menu['levels']))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index',[$menu['phase']]) }}">{{ __('menus.levels.'.$menu['phase'].'.phase')}}</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="{{ $menu['phase'] }}Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('menus.levels.'.$menu['phase'].'.phase')}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-end" aria-labelledby="{{ $menu['phase'] }}Dropdown">
                            @foreach($menu['levels'] as $i=>$l)
                            <li><a class="dropdown-item" href="{{ route('courses.index',[$menu['phase'], $l]) }}">{{ __('menus.levels.'.$menu['phase'].'.levels.'.$l)}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('teachers.*')?'active':''}}" href="{{ route('teachers.index') }}">{{ __('menus.teachers.title') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('library.*')?'active':''}}" href="#">{{ __('menus.library.title')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('news.*')?'active':''}}" href="#">{{ __('menus.news.title')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
