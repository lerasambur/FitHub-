@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="form-container">
        <h2>Login to FitHub</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            @endif
        </form>
    </div>
</div>
@endsection

@section('styles')
<style>
    .container.main {
        margin: auto;
        width: 80%;
        text-align: center;
        padding: 50px;
    }
    .form-container {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
        margin-top: 20px;
        text-align: left;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        color: #d4af37;
    }
    .btn-primary {
        background-color: #d4af37;
        color: #1c1c1c;
        padding: 10px 20px;
        border-radius: 5px;
        margin: 5px;
    }
    .btn-primary:hover {
        background-color: #c49a35;
    }
    .btn-link {
        color: #d4af37;
    }
    .btn-link:hover {
        color: #c49a35;
    }
</style>
@endsection

