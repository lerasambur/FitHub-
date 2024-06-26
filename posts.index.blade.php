@extends('layouts.app')

@section('content')
<div class="container main">
    <h2>Latest Posts</h2>
    <div class="posts">
        @foreach($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <p>Author: {{ $post->user->name }}</p>
            </div>
        @endforeach
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
    .posts {
        margin-top: 20px;
        background-color: #2c2c2c;
        padding: 10px;
        border-radius: 5px;
        color: #d4af37;
        text-align: left;
    }
    .post {
        margin-bottom: 20px;
        padding: 10px;
        background-color: #3a3a3a;
        border-radius: 5px;
    }
    .post h3 {
        color: #d4af37;
    }
    .post p {
        color: #fff;
    }
</style>
@endsection
