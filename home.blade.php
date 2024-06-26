@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="profile-header">
        <h2>Welcome to FitHub</h2>
    </div>
    <div class="profile-content">
        <p>Train, share, and achieve your goals with us.</p>
    </div>
    <div class="buttons">
        <a href="{{ route('register') }}" class="button">Registration</a>
        <a href="{{ route('login') }}" class="button">Login</a>
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
    .profile-header {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .profile-content {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
        margin-top: 20px;
        text-align: left;
    }
    .buttons {
        margin-top: 20px;
    }
    .button {
        background-color: #d4af37;
        color: #1c1c1c;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin: 5px;
    }
</style>
@endsection
