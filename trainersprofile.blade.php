@extends('layouts.app')

@section('content')
<div class="container">
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
    </div>
</div>
@endsection

