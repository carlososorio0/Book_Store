
@if(Auth::check())

<li class="dropdown">
    <a href="#"  class="dropdow-toggle"  data-toggle="dropdown"  role="button"  aria-expanded="false">
            <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>

        </a>

        <div class="dropdown-menu" role="menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Finalizar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

        @else

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-expanded="false">
            <i class="fa fa-user"></i> <span class="caret"></span>
</a>
    <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
</ul>
</li>
@endif