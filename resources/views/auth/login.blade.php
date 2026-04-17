<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - RPL 1</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="universal_container">
        <div class="universal_card">
            <div class="universal_header">
                <h2>Login Admin</h2>
                <p>Masukan kredensial Anda untuk melanjutkan</p>
            </div>
            <form action="/login" method="POST" class="universal_form">
                @csrf
                <div class="form_group">
                    <label for="name">Username</label>
                    <input type="text" id="name" name="name" required placeholder="Masukan Username Anda">   
                </div>
                <div class="form_group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Masukan Password Anda">   
                </div>
                <button type="submit" class="btn_login">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>