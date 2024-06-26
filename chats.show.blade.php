@extends('layouts.app')

@section('content')
<div class="header">
    <h1>FitHub</h1>
</div>

<div class="main">
    <div class="container">
        <h2>{{ $chat->title }}</h2>

        <div class="messages">
            @foreach($chat->messages as $message)
                <p><strong>{{ $message->user->name }}:</strong> {{ $message->body }}</p>
            @endforeach
        </div>

        <form action="{{ route('chats.messages.store', $chat->id) }}" method="POST">
            @csrf
            <textarea name="body" required></textarea>
            <button type="submit" class="button">Send</button>
        </form>
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
        margin-top: 10px;
    }
    .container {
        margin: auto;
        width: 80%;
    }
    .messages {
        margin-top: 20px;
        background-color: #2c2c2c;
        padding: 10px;
        border-radius: 5px;
        color: #d4af37;
    }
    .messages p {
        margin-bottom: 10px;
    }
    form {
        margin-top: 20px;
    }
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #3a3a3a;
    }
</style>
@endsection
