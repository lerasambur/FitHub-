@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="profile-header">
        <h2>Add New Video</h2>
    </div>
    <div class="profile-content">
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

    $('#videoForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("trainer.storeVideo") }}',
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Video successfully added');
                // Redirect or update UI as needed
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
