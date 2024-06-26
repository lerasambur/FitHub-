@extends('layouts.app')

@section('content')
<div class="header">
    <h1>FitHub</h1>
</div>

<div class="main">
    <div class="container">
        <h2>Chats</h2>
        <ul class="chat-list">
            @foreach($chats as $chat)
            <li>{{ $chat->title }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="footer">
    <p>&copy; 2024 FitHub. Все права защищены.</p>
</div>
@endsection

@section('styles')
<style>
    body {
        background-color: #1c1c1c;
        color: #d4af37;
        font-family: Arial, sans-serif;
    }
    .header, .footer {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .main {
        text-align: center;
        padding: 50px;
    }
    .button {
        background-color: #d4af37;
        color: #1c1c1c;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin: 5px;
    }
    .container {
        margin: auto;
        width: 80%;
    }
    .chat-list {
        list-style-type: none;
        padding: 0;
    }
    .chat-list li {
        background-color: #2c2c2c;
        color: #d4af37;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }
</style>
@endsection

