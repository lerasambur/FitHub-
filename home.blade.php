@extends('layouts.app')

@section('content')
<div class="container main">
    <h2>Welcome to FitHub</h2>
    <p>Train, share, and achieve your goals with us.</p>
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
    h2, p {
        color: #d4af37;
    }
</style>
@endsection
