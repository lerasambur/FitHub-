@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chats</h2>
    <ul>
        @foreach($chats as $chat)
            <li>
                <a href="{{ route('chats.show', $chat->id) }}">{{ $chat->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
