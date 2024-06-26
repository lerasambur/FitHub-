<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - FitHub</title>
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
        .form-container {
            background-color: #2c2c2c;
            padding: 20px;
            border-radius: 5px;
            display: inline-block;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #3a3a3a;
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
        <h2>Вход</h2>
        <div class="form-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit" class="button">Войти</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 FitHub. Все права защищены.</p>
    </div>
</body>
</html>
