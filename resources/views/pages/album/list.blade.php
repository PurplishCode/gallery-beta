<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    @extends('layout.main')
    @section('content')
    <div class="d-flex justify-content-between">


        @foreach($dataAlbum as $album)
        <div class="mt-5 p-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img') . '/' . $album->lokasiFile }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $album->judulFoto }}</h5>
                    <p class="card-text">{{ $album->deskripsiFoto }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection
</body>

</html>