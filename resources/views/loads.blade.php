<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojistik Sayfası</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <center>
            <h4>Güncel Yükler</h4>
            <hr>
            <a href="{{ route('back') }}" class="btn btn-secondary">Geri</a>
            <hr>
            <ul class="list-group">
                @foreach ($data as $value)
                    <li class="list-group-item text-center">
                        <strong>Yük:</strong> {{ $value->name }} <br>
                        <strong>Nereden:</strong> {{ $value->from }} <br>
                        <strong>Nereye:</strong> {{ $value->to }} <br>
                        <strong>Dorse Tipi:</strong> {{ $value->trailer_type }} <br>
                        <strong>Yükleme Zamanı:</strong> {{ date('Y-m-d', strtotime($value->load_time)) }} <br>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('logistics.edit', ['id' => $value->id]) }}"
                                class="btn btn-primary mr-2">Güncelle</a>
                            <form action="{{ route('logistics.destroy', ['id' => $value->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Sil</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </center>
    </div>
</body>

</html>
