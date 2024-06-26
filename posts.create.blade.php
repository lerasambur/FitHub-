@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="post-header">
        <h2>Create New Post</h2>
    </div>
    <div class="post-content">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="body">Body:</label>
                <textarea name="body" id="body" rows="5" required></textarea>
            </div>
            <div>
                <label for="image">Upload Image:</label>
                <input type="file" name="image" id="image">
            </div>
            <button type="submit" class="button">Create Post</button>
        </form>
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
    .post-header {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .post-content {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
        margin-top: 20px;
        text-align: left;
    }
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #3a3a3a;
    }
    input[type="file"] {
        margin-top: 5px;
    }
</style>
@endsection
