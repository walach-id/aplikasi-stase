<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @foreach ($dosen_dosen as $dosen)
        <h1>{{ $dosen->nama_lengkap }}</h1>
        @foreach ($dosen->mahasiswa as $mahasiswa)
            <h2>{{ $mahasiswa->nama_lengkap }}</h2>
        @endforeach
    @endforeach --}}

    @foreach ($mahasiswa as $maha)
        <h1>{{ $maha->nim }}</h1>
        <h1>{{ $maha->nama_lengkap }}</h1>
        <h2>{{ $maha->dosen->nama_lengkap }}</h2>
    @endforeach
</body>

</html>
