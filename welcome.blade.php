@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="header">
        <h1>FitHub</h1>
    </div>
    <div class="main-content">
        <h2>{{ __('messages.welcome') }}</h2>
        <p>{{ __('messages.description') }}</p>
        <div class="buttons">
            <a href="{{ route('register') }}" class="button">{{ __('messages.register') }}</a>
            <a href="{{ route('login') }}" class="button">{{ __('messages.login') }}</a>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 FitHub. All rights reserved.</p>
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
    .header {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .main-content {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
        margin-top: 20px;
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
    .footer {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
        margin-top: 20px;
    }
</style>
@endsection
