<nav>

    <!-- Este div se encargará de mostrar el logo de la página y con el section mostraremos
    en que pagina estamos en cada momento-->
    <div>
        <a href="{{url('/')}}"> <img src="{{asset('assets/local/logo.png')}}" class="photo" /> </a>
        <p> @section('TextoModif') @show</p>
    </div>
    <!-- Si no ha iniciado sesion se le mostrara el div con las opciones de login y register que
    le redireccionaran a la pagina-->
    @if(!Auth::check())
        <div class="init">
            <p class="log">
                <a href="{{url('/login')}}">Login</a>
                <a href="{{url('/register')}}"> Register</a>
            </p>
        </div>
    @endif
<!-- En este dif si ha iniciado sesion se le dara la opcion de avanzar hasta la pestaña de servicios
y en caso de que sea admin se le mostrara la pestaña de administracion-->
    <div>
        <ul>

            @if(Auth::check())

                @if(Auth::user()->isAdmin())
                    <li><a href="{{url('/admin')}}">Administracion</a></li>
                @endif
                <li><a>servicios</a></li>
            @endif
            <li><a href="{{url('/contact')}}">Contact</a></li>
            <li><a href="{{url('/about')}}">About us</a></li>
        </ul>
    </div>
    <!-- si el usuario ha iniciado sesion mostraremos su foto de perfil el saldo y una opcion para deslogearse-->
    @if(Auth::check())
        <div >
            <img src="{{asset('assets/local/logo.png')}}" class="profile" />
            <ul class="list">
                <li class="date">Saldo actual</li>
                <li class="date"><a href="{{ route('logout') }}">log out</a></li>

            </ul>
        </div>
    @endif

</nav>
