@extends('layouts.app')

@section('content')
<div class="container main">
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
@endsection

@section('styles')
<style>
    .container.main {
        margin: auto;
        width: 80%;
        text-align: center;
        padding: 50px;
    }
    .messages {
        margin-top: 20px;
        background-color: #2c2c2c;
        padding: 10px;
        border-radius: 5px;
        color: #d4af37;
        text-align: left;
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


