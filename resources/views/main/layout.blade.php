<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laract Penilaian SIswa</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {{-- HEADER --}}
    <div class="header">'
        <img src="/gambar/header.jpg" width="100%" height="40%"/>
    </div>

    {{-- MENU --}}
    <div class="menu">
        <b>
            <a href="/home">Home</a>
            {{-- @if (session('user')->role == 'admin') --}}
                <a href="/guru/index">GURU</a>
                <a href="/jurusan/index">JURUSAN</a>
                <a href="/kelas/index">KELAS</a>
                <a href="/siswa/index">SISWA</a>
                <a href="/mapel/index">MATA PELAJARAN</a>
                <a href="/mengajar/index">MENGAJAR</a>
            {{-- @else --}}
                <a href="/nilai/index">NILAI</a>
            {{-- @endif --}}
            <a href="/logout">LOGOUT</a>
        </b>
    </div>

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    <center>
        <p>&copy; {{ date('Y') }} - UJIKOM LSP</p>
    </center>
</body>
</html>