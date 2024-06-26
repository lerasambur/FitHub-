@extends('layouts.app')

@section('content')
<div class="container main">
    <div class="card">
        <div class="card-header">
            <h2>Профиль тренера</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('path_to_trainer_image.jpg') }}" alt="Trainer Photo" class="img-fluid">
                    <h4>{{ $trainer->user->name }}</h4>
                    <p>{{ $trainer->specialization }}</p>
                </div>
                <div class="col-md-8">
                    <h5>Образование</h5>
                    <p>{{ $trainer->education }}</p>
                    <h5>Опыт работы</h5>
                    <p>{{ $trainer->experience }}</p>
                    <h5>Описание</h5>
                    <p>{{ $trainer->description }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p>Цена за услуги: {{ $trainer->service_price }} руб.</p>
            <a href="{{ route('trainer.services.buy', $trainer->id) }}" class="button">Оплатить услуги</a>
        </div>
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
    .card {
        background-color: #3a3a3a;
        color: #d4af37;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .card-header, .card-footer {
        background-color: #2c2c2c;
        padding: 10px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        text-align: center;
    }
    .card-body {
        padding: 20px;
    }
    .card-body h5 {
        color: #d4af37;
    }
    .card-footer {
        padding: 10px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        text-align: center;
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>
@endsection
