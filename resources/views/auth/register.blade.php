<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kayıt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
            <h4>Kayıt</h4>
            <hr>
            <form action="{{route('register-user')}}" method="POST">
            @if (Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
                @csrf
                <div class="form-group">
                    <label for="name">Tam Adınızı Giriniz:</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="username">Kullanıcı Adı Belirleyiniz:</label>
                    <input type="text" class="form-control" name="username">
                    <span class="text-danger">@error('username') {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Şifre Belirleyiniz:</label>
                    <input type="password" class="form-control" name="password" value="">
                    <span class="text-danger">@error('password') {{$message}}@enderror</span>
                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="register">Kayıt</button>
                </div>
            </form>
            <hr>
            <a href="login">Hesabın varsa buraya tıkla ;)</a>
        </div>
    </div>
</div>


</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
</html>
