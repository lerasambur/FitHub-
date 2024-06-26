@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload a Video</h2>
    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="video">Video File</label>
            <input type="file" name="video" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection

