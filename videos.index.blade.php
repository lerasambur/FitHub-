@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Videos</h2>
    <ul>
        @foreach($videos as $video)
            <li>
                <a href="{{ route('videos.show', $video->id) }}">{{ $video->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection

