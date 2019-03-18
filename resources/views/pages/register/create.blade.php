<div style="background-image: url('{{URL::asset('public/img/bg/sunset_bldg.jpg')}}'); background-repeat: no-repeat; background-size: 100%; background-attachment: fixed; background-position: bottom;">

@extends('layouts.app')

@section('content')

<div class="row justify-content-center" >
  <div class="col-md-6">
    <div class="card mx-4">
      <div class="card-body p-4 text-center">
      @guest 
        <h1>Registration</h1>
        <p class="text-muted">Create your free account</p>
        @include('forms.register')
      @else
      <div class="btn-warning">You're already logged in.</div>
      @endauth
      </div>
    </div>
  </div>
</div>
</div>
@stop