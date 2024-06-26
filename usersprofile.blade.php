@extends('layouts.app')

@section('content')
<div class="container">
    <div class="profile-header">
        <h2>User Profile</h2>
    </div>
    <div class="profile-content">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Goal:</strong> {{ $user->goal->goal }}</p>
        <p><strong>Weight:</strong> {{ $user->goal->weight }}</p>
        <p><strong>Height:</strong> {{ $user->goal->height }}</p>
        <p><strong>Age:</strong> {{ $user->goal->age }}</p>
        <div id="calendar"></div>
    </div>
</div>

<!-- Modal for adding data -->
<div id="eventModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add Data</h2>
        <form id="eventForm">
            @csrf
            <input type="hidden" name="date" id="eventDate">
            <div>
                <label for="weight">Weight (kg):</label>
                <input type="number" name="weight" id="weight" required>
            </div>
            <div>
                <label for="calories">Calories (kcal):</label>
                <input type="number" name="calories" id="calories" required>
            </div>
            <div>
                <label for="meals">Meals:</label>
                <textarea name="meals" id="meals" required></textarea>
            </div>
            <button type="submit" class="button">Save</button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.10.1/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.1/main.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@5.10.1/main.min.css">

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
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

<script>
$(document).ready(function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        dateClick: function(info) {
            $('#eventDate').val(info.dateStr);
            $('#eventModal').show();
        }
    });
    calendar.render();

    $('.close').on('click', function() {
        $('#eventModal').hide();
    });

    $('#eventForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("user.storeData") }}',
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Data successfully saved');
                $('#eventModal').hide();
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Error saving data');
            }
        });
    });
});
</script>
@endsection
