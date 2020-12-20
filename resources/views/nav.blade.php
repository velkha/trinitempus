<section class="nav">
    <div>
        <img src="{{asset('assets/local/logo.png')}}" class="photo" />
        <p> Texto modif</p>
    </div>
@if(!Auth::check())
    <div class="init">
        <p class="log">
            <a href="{{url('/login')}}">Login or</a>
            <a href="{{url('/register')}}"> Register</a>
        </p>
    </div>
    @endif
    <div>
        <ul>
            @if(Auth::check())
                @if(admin)
            <li>Administracion</li>
                @endif
                <li>servicios</li>
            @endif
            <li>Contact</li>
            <li>About</li>
        </ul>
    </div>
@if(Auth::check())
    <div >
        <img src="{{asset('assets/local/logo.png')}}" class="profile" />
        <ul class="list">
            <li class="date">Saldo actual</li>
            <li class="date">log out</li>

        </ul>
    </div>
@endif
</section>
