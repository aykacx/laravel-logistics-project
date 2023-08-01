<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Styles -->
</head>

<body class="antialiased">
    @extends('layouts.app')
    @section('content')
        <div class="container mt-3">
            <h4 class="text-center">Hoşgeldiniz {{ $user->full_name }}</h4>
            <hr>
            <div class="row">
                <div class="text-center">
                    <a href="{{ route('/getData') }}" class="btn btn-primary">Veriler</a>
                    <a href="{{ route('homePage') }}" class="btn btn-danger">Çıkış</a>
                </div>
            </div>
            <hr>
            <form action="{{ route('/putdata') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Yük Adı</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="from">Nereden</label>
                    <input type="text" name="from" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="to">Nereye</label>
                    <input type="text" name="to" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="trailer_type">Dorse Tipi</label>
                    <input type="text" name="trailer_type" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="load_time">Yükleme Zamanı</label>
                    <input type="date" name="load_time" class="form-control" required>
                </div>
                <input class="btn btn-success btn-block mt-2" type="submit" name="add" value="Yayınla">
            </form>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    </html>
