@extends('layouts.app')

@section('content')
<div class="container main">
    <h2>Create a Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control" required></textarea>
        </div>
        <button type="submit" class="button">Submit</button>
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
    form {
        margin-top: 20px;
        text-align: left;
    }
    form .form-group {
        margin-bottom: 20px;
    }
    form label {
        color: #d4af37;
    }
    form input[type="text"],
    form textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #3a3a3a;
        background-color: #2c2c2c;
        color: #d4af37;
    }
    form button {
        background-color: #d4af37;
        color: #1c1c1c;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>
@endsection

