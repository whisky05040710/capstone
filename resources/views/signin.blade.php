@extends('layouts.signin')
@section('content')



<form method="POST" action="{{ route('signin.store') }}">
    @csrf
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="form-login">
        <label>Email</label>
        <div class="form-addons">
            <input type="text" name="email" placeholder="Enter your email address">
            <img src="assets/img/icons/mail.svg" alt="img">
        </div>
    </div>
    <div class="form-login">
        <label>Password</label>
        <div class="pass-group">
            <input type="password" name="password" class="pass-input" placeholder="Enter your password">
            <span class="fas toggle-password fa-eye-slash"></span>
        </div>
    </div>
    <div class="form-login">
        <div class="alreadyuser">
            <h4><a href="forgetpassword.html" class="hover-a">Forgot Password?</a></h4>
        </div>
    </div>
    <div class="form-login">
        <button class="btn btn-login" type="submit">Sign In</button>
    </div>
</form>

@endsection
