<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Düzenle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container mt-4">
            <form method="post" action="{{ route('logistics.update', $logistics->id) }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Ad:</label>
                    <input type="text" name="name" value="{{ $logistics->name }}" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="from">Başlangıç Noktası:</label>
                    <input type="text" name="from" value="{{ $logistics->from }}" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="to">Varış Noktası:</label>
                    <input type="text" name="to" value="{{ $logistics->to }}" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="trailer_type">Römork Tipi:</label>
                    <input type="text" name="trailer_type" value="{{ $logistics->trailer_type }}" required
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="load_time">Yükleme Zamanı:</label>
                    <input type="date" name="load_time" value="{{ date('Y-m-d', strtotime($logistics->load_time)) }}" required
                        class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Güncelle</button>
                <a href="{{ route('logistics.index') }}" class="btn btn-secondary">Geri</a>
            </form>

            @if (Session::has('success'))
                <div class="alert alert-success mt-4">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger mt-4">{{ Session::get('fail') }}</div>
            @endif
        </div>
    @endsection

</body>

</html>
