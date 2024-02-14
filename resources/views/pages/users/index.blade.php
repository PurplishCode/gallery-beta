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
    <div class="d-flex justify-content-center pt-4 flex-end">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#buatModal">
            Tambahkan Foto
        </button>
    </div>
    
<div id="buatModal" class="modal fade" aria-labelledby="buatModalData" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="buatModalData">
                    Buat Foto
                </div>
                <button data-bs-dismiss="modal" class="btn-close" aria-label="close"></button>
            </div>
            <div class="modal-body">
               
                <form action="{{ route('foto.create') }}" enctype="multipart/form-data" class="form-group pb-4">
                    @csrf
                    @method('POST')
                   
                    <div> <input type="text" name="judulFoto" class="form-control" placeholder="Judul Foto"></div>
                        
                    <div class="pt-4"> <input type="text" name="deskripsiFoto" class="form-control" placeholder="Deskripsi Foto"></div>
                        
                    <div class="pt-4"> <input type="file" name="lokasiFile" class="form-control"></div>
                   
                    <div class="pt-4"><select class="form-select" name="albumID">
                        @foreach($album as $dataAlbum)
                        <option value="{{ $dataAlbum->albumID }}"></option>{{ $dataAlbum->namaAlbum }}
                        @endforeach

                    </select>
 
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

    @foreach($foto as $dataFoto)
    <div class="mt-5 p-4">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $dataFoto->judulFoto }}</h5>
                <p class="card-text">{{ $dataFoto->deskripsiFoto }}</p>

            </div>
        </div>
    </div>
    @endforeach

    

    @endsection
</body>

</html>