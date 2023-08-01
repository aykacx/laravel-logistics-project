<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ömer Aykaç</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="antialiased">
    @extends('layouts.app')
    @section('content')

        <div class="container mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary">Giriş</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Kayıt</a>
            <hr>
            <div>
                <strong>
                    <p>Ömer AYKAÇ - 0539 330 1156</p>
                </strong>
            </div>
            <hr>
            <h4>Güncel bekleyen yükler</h4>
            <ul class="list-group">
                @foreach ($data as $value)
                    <li class="list-group-item">
                        <strong>Yük Adı:</strong> {{ $value->name }} <br>
                        <strong>Nereden:</strong> {{ $value->from }} <br>
                        <strong>Nereye:</strong> {{ $value->to }} <br>
                        <strong>Dorse Tipi:</strong> {{ $value->trailer_type }} <br>
                        <strong>Yükleme Zamanı:</strong> {{ date('Y-m-d', strtotime($value->load_time)) }} <br>
                    </li>
                @endforeach
            </ul>
        </div>

    </body>

    </html>
