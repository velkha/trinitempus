@extends('layouts.app')

@section('TextoModif', 'Verify Your Email Address')

@section('content')
<div class="img-logo-circular">
    <img src="{{asset('assets/local/fulllogocircular.png')}}" class="center">
</div>
<br>
<div class="card-header">{{ __('Verify Your Email Address') }}</div>
<br>
<div class="card-body">
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
    </form>
</div>
@endsection
