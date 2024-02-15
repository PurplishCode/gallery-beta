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
    <div class="pt-4 d-flex justify-content-center"><button type="button" data-bs-toggle="modal"
            data-bs-target="#bukaModal" class="btn btn-success">Buat Album</button></div>

    <div class="modal fade" id="bukaModal" aria-labelledby="modalData" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">ALBUM</div>
                    <button type="button" data-bs-dismiss="modal" class="btn-close" aria-label="close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('album.create') }}" method="POST" class="form-group">
                    @csrf
                    @method('POST')

                    <div> <input type="text" name="namaAlbum" class="form-control" placeholder="Nama Album"></div>
                        
                    <div class="pt-4"> <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Album"></div>
                        
                    <div class="pt-4 d-flex justify-content-center"><button type="submit" class="btn btn-secondary">SUBMIT</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        
    @foreach ($album as $dataAlbum)
    <div class="mt-5 p-4">
        <div class="card bg-dark text-white" style="width: 18rem;">
            
            <div class="card-body">
                <h5 class="card-title">{{ $dataAlbum->namaAlbum }}</h5>
                <p class="card-text">{{ $dataAlbum->deskripsi }}</p>
                <a href="{{ route('album.show', $dataAlbum->albumID) }}" class="btn btn-primary">Show Foto</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    @endsection
</body>

</html>