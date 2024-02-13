<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('layout.style')
    @include('layout.script')
</head>

<body>

    <header class="header fixed-top d-flex align-items-center" id="header">
        <div class="d-flex align-items-center justify-content-center">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none;">
                <img src="{{ asset('chibi.jpg') }}" alt="Gallea Logo" style="width:50px;">
                <span class="d-none d-md-block">Gallea</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
    </header>
</body>

</html>