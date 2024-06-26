@extends('layouts.app')

@section('content')
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
        <button type="submit">Send</button>
    </form>
</div>
@endsection
