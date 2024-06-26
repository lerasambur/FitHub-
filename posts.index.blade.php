@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Posts</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection

