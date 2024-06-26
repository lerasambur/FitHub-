@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="posts-header">
        <h2>Posts</h2>
    </div>
    <div class="posts-content">
        @foreach ($posts as $post)
        <div class="post">
            <div class="post-header">
                <p><strong>{{ $post->user->name }}</strong> <span>{{ $post->created_at->diffForHumans() }}</span></p>
            </div>
            <div class="post-body">
                <p>{{ $post->body }}</p>
            </div>
            <div class="post-footer">
                <p><strong>Comments:</strong> {{ $post->comments_count }}</p>
                <a href="#" class="button">Comment</a>
            </div>
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
        padding: 50px;
    }
    .posts-header {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .posts-content {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
        margin-top: 20px;
    }
    .post {
        margin-bottom: 20px;
        background-color: #3a3a3a;
        padding: 15px;
        border-radius: 5px;
    }
    .post-header {
        margin-bottom: 10px;
        color: #d4af37;
    }
    .post-body {
        color: #fff;
        margin-bottom: 10px;
    }
    .post-footer {
        color: #d4af37;
    }
    .button {
        background-color: #d4af37;
        color: #1c1c1c;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 5px;
        margin: 5px;
    }
</style>
@endsection
