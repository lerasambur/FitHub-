@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="profile-header">
        <h2>Trainer Profile</h2>
    </div>
    <div class="profile-content">
        <p><strong>Name:</strong> {{ $trainer->name }}</p>
        <p><strong>Email:</strong> {{ $trainer->email }}</p>
        <p><strong>Specialization:</strong> {{ $trainer->specialization }}</p>
        <p><strong>Education:</strong> {{ $trainer->education }}</p>
        <p><strong>Experience:</strong> {{ $trainer->experience }}</p>
        <p><strong>Description:</strong> {{ $trainer->description }}</p>
        <div>
            <h3>Services & Videos</h3>
            <p><strong>Price:</strong> ${{ $trainer->price }}</p>
            <p><strong>Services:</strong> {{ $trainer->services }}</p>
            <p><strong>Videos:</strong> {{ $trainer->videos }}</p>
        </div>
        <div id="videos">
            <!-- Placeholder for videos -->
        </div>
    </div>
</div>

<!-- Modal for adding videos -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add Video</h2>
        <form id="videoForm">
            @csrf
            <div>
                <label for="video_url">Video URL:</label>
                <input type="text" name="video_url" id="video_url" required>
            </div>
            <div>
                <label for="access_level">Access Level:</label>
                <select name="access_level" id="access_level" required>
                    <option value="all">All Users</option>
                    <option value="paid">Paid Users Only</option>
                </select>
            </div>
            <button type="submit" class="button">Save</button>
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
    .profile-header {
        background-color: #3a3a3a;
        padding: 20px;
        text-align: center;
    }
    .profile-content {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 5px;
        color: #d4af37;
        margin-top: 20px;
        text-align: left;
    }
    #videos {
        margin-top: 20px;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
    }
    .modal-content {
        background-color: #2c2c2c;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        color: #d4af37;
    }
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    label {
        display: block;
        margin-top: 10px;
    }
</style>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Placeholder for fetching and displaying trainer's videos
    // Replace with actual logic to fetch and display videos
    var trainerVideos = {!! json_encode($trainer->videos) !!};
    var videosHtml = '';
    trainerVideos.forEach(function(video) {
        videosHtml += '<div><iframe width="560" height="315" src="' + video.url + '" frameborder="0" allowfullscreen></iframe></div>';
    });
    $('#videos').html(videosHtml);

    $('.close').on('click', function() {
        $('#videoModal').hide();
    });

    $('#videoForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("trainer.storeVideo") }}',
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Video successfully added');
                $('#videoModal').hide();
                // Update videos display dynamically if needed
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Error adding video');
            }
        });
    });
});
</script>
@endsection
