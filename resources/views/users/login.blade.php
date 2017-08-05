@extends('master')

@section('tab')
 Login
@endsection

@section('style')
  <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
<div class="col-md-3">

</div>
<div class="jumbotron col-md-6 " style="margin-top: 5em">
  <h1>Login</h1>

  <form action="{{ url('user/do-login') }}" method="post">

    <div class="form-group">
        <input type="text" name="email" id="email" placeholder="Uw email adress alstublieft" class="form-control">
    </div>

    <div class="form-group">
      <input type="password" name="password" id="password" placeholder="Hier je Geheime Wachtwoord" class="form-control">
    </div>

    <div class="form-group">
      <input type="submit" name="login" value="Login" id="login-btn" class="btn btn-primary">
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

</div>
@endsection
