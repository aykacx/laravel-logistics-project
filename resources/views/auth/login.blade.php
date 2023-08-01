<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                <h4>Giriş</h4>
                <hr>
                <form action="{{ route('login.user') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" name="username" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre:</label>
                        <input type="password" class="form-control" name="password" value="" required>
                    </div>
                    <div class="form-group mt-2">
                        <button class="btn btn-block btn-success" type="submit" name="login">Giriş</button>
                    </div>
                </form>

                @if (Session::has('fail'))
                    <div class="alert alert-danger mt-2">{{ Session::get('fail') }}</div>
                @endif

            </div>
        </div>
    </div>


</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>
