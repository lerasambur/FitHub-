@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    {{ __('Chats') }}
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($chats as $chat)
                            <li class="list-group-item">
                                <a href="{{ route('chats.show', $chat->id) }}">{{ $chat->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    {{ __('Chat Messages') }}
                </div>
                <div class="card-body bg-light" id="chat-box">
                    @if(isset($messages))
                        <ul class="list-group">
                            @foreach($messages as $message)
                                <li class="list-group-item">
                                    <strong>{{ $message->user->name }}:</strong> {{ $message->content }}
                                    <span class="text-muted float-right">{{ $message->created_at->format('H:i') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>{{ __('Select a chat to view messages') }}</p>
                    @endif
                </div>
                @if(isset($selectedChat))
                    <div class="card-footer bg-dark">
                        <form action="{{ route('chats.sendMessage', $selectedChat->id) }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="message" class="form-control" placeholder="{{ __('Type a message...') }}" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">{{ __('Send') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection


