@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="videos-header">
        <h2>Video Tutorials</h2>
    </div>
    <div class="videos-content">
        @foreach($videos as $video)
        <div class="video-item">
            <h3>{{ $video->title }}</h3>
            <iframe width="560" height="315" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
            <p>{{ $video->description }}</p>
            @if ($video->access_level === 'paid')
            <p><strong>Access:</strong> Paid Users Only</p>
            @else
            <p><strong>Access:</strong> All Users</p>
            @endif
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
    .videos-header {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .videos-content {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;
    }
    .video-item {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
    }
    .video-item h3 {
        margin-top: 0;
    }
    .video-item iframe {
        width: 100%;
    }
</style>
@endsection
