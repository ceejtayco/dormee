<div style="background-image: url('{{URL::asset('public/img/bg/bldg_girl.jpg')}}'); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed; background-position: center;">

@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card-group">
      <div class="card p-4">
        <div class="card-body">
        @guest
          <h1>Login</h1>
          <p class="text-muted">Sign in to your account</p>
          @include('forms.login')

        </div>
      </div>
      <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
        <div class="card-body text-center">
          <div>
            @include('forms.sign_up')
          </div>
        </div>
      </div>
      @else
      You're already logged in.
      @endauth
    </div>
  </div>


</div>
</div>
@stop

