@extends('layouts.app')

@section('content')
<div class="container main">
    <h2>{{ $chat->title }}</h2>
    <div class="messages">
        @foreach($chat->messages as $message)
            <div class="message">
                <p><strong>{{ $message->user->name }}:</strong> {{ $message->body }}</p>
            </div>
        @endforeach
    </div>
    <form action="{{ route('chats.messages.store', $chat->id) }}" method="POST">
        @csrf
        <div class="message-form">
            <textarea name="body" placeholder="Type your message..." required></textarea>
            <button type="submit" class="button">Send</button>
        </div>
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
        max-height: 400px;
        overflow-y: scroll;
    }
    .message {
        margin-bottom: 10px;
    }
    .message p {
        margin: 5px 0;
    }
    .message-form {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .message-form textarea {
        width: 80%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #3a3a3a;
        resize: none;
    }
</style>
@endsection

