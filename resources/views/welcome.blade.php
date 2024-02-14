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
    <main id="main" class="main main-landing">
        <div class="position-relative overflow-hidden p-5 p-md-5 text-white bg-light bimage" style="background-image: url({{ asset('assets/kay1.jpg') }}); position: relative;background-size:cover;background-color:rgba(0,0,0,0.5);
font-family:cursive;opacity:0.8">
            <div class="p-lg-5 my-5">
                <h1 class="title fw-400" style="font-family: Sofia;">Gallea</h1>
                <blockquote class="blockquoute">
                    <div class="lead fw-normal mt-3">
                        Save and Pick Image with Gallea!
                    </div>
                </blockquote>
                <a href="" class="btn  btn-sm fw-bold text-white"
                    style="font-family:Calibri;width:100px;background-color:purple;border-radius:14px;background-image: linear-gradient(-155deg,rgba(190, 46, 247, 0.4) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(77,8,211,.2));background-color: rgba(88, 74, 214, 0.9);">BEGIN</a>
                <figure class="text-end mt-4">
                    <blockquote>"To the magnificent land!"</blockquote>
                    <figcaption class="blockquoute-footer">
                        <cite title="Gallea" style="color:white;">
                            Gallea Digital
                        </cite>
                    </figcaption>
                </figure>

            </div>
            <div class="product-device shadow-sm d-none d-block"></div>
            <div class="product-device prdouct-device-2 shadown-sm d-md-block d-none"></div>
        </div>
    </main>
    @endsection

</body>

</html>