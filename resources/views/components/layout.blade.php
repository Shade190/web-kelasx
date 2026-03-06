<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPL 1</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div>
            <div>
            <h1 style="background-color: red">X RPL 1</h1>
            <p>Dashboard</p>
            </div>
    <nav style="background-color: yellow">
        <li><a href="/">Ringkasan</a></li>
        <li><a href="/siswa">Siswa</a></li>
        <li><a href="/jadwal">Jadwal</a></li>
        <li><a href="/pengumuman">Pengumuman</a></li>
        <li><a href="/piket">Piket</a></li>
    </nav>
    </div>
    </header>

    <main>
        <div>
            {{$slot}}
        </div>
    </main>
</body>
</html>