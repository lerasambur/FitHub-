<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #1c1c1c;
            color: #d4af37;
            font-family: Arial, sans-serif;
        }
        .header, .footer {
            background-color: #3a3a3a;
            padding: 20px;
            text-align: center;
        }
        .main {
            text-align: center;
            padding: 50px;
        }
        .button {
            background-color: #d4af37;
            color: #1c1c1c;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>FitHub</h1>
    </div>
    <div class="main">
        <h2>Добро пожаловать на FitHub!</h2>
        <p>Тренируйтесь, делитесь и достигайте своих целей вместе с нами.</p>
        <a href="{{ route('register') }}" class="button">Регистрация</a>
        <a href="{{ route('login') }}" class="button">Войти</a>
    </div>
    <div class="footer">
        <p>&copy; 2024 FitHub. Все права защищены.</p>
    </div>
</body>
</html>
