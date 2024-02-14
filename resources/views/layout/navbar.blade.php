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

    <header class="bg-dark header fixed-top d-flex align-items-center" id="header">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none;">
                <img src="{{ asset('assets/chibi.jpg') }}" alt="Gallea Logo" style="width:50px;">
                <span class="d-none d-md-block">Gallea</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        @if (Auth::check())
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a href="" class="nav-link nav-profile d-flex align-items-center  pe-0" data-bs-toggle="dropdown">
                        @if (Auth::user())
                        <img src="{{ asset('assets/avatar-masyarakat.png') }}" alt="Profile" style="rounded-circle">
                        @endif
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->name }}</h6>
                            </li>
                        </ul>
                    </a>
                </li>
            </ul>
        </nav>
        @else
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center">
                <div class="px-3 py-2 mb-1">
                    
                    <div class="container d-flex flex-wrap justify-content-center">
                        <a href="{{ route("login.display") }}" class="btn text-white btn-sm me-2" style="text-decoration:none; ackground-color:purple;border-radius:14px;background-image: linear-gradient(-155deg,rgba(20,100,214,.4) 45%,rgba(255,255,255,.08) 15%),linear-gradient(258deg,rgba(87,238,255,.1),rgba(77,8,211,.2));background-color: rgba(74,148,214,.9);">LOGIN</a>
                        <a href="{{ route("register.display") }}" class="btn text-white btn-sm" style="text-decoration:none; ackground-color:purple;border-radius:14px;background-image: linear-gradient(-155deg,rgba(20,100,214,.4) 45%,rgba(255,255,255,.08) 15%),linear-gradient(258deg,rgba(87,238,255,.1),rgba(77,8,211,.2));background-color: rgba(74,148,214,.9);">REGISTER</a>
                    
                    </div>
                </div>
            </div>
        </nav>
        @endif
    </header>
</body>

</html>