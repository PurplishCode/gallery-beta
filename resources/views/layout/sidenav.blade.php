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

    <header class="navbar navbar-expand-lg navbar-light bg-dark" id="header">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-start" style="text-decoration: none;">

                <span class="px-2 d-none d-md-block text-white" style="font-family: cursive;">GALLEA</span>
            </a>
            <button class="btn" type="button" style="color: white;"><i class="bi bi-list" data-bs-toggle="offcanvas"
                    aria-controls="data" data-bs-target="#data"></i>
            </button>
        </div>
@if (Auth::check())
    <nav class="header-nav ms-auto">
        <div class="d-flex align-items-center">
        <div class="px-3 py-2 mb-1">
            <div class="container d-flex flex-wrap justify-content-center text-white fw-bold">PENGGUNA</div>
        </div>
        </div>
    </nav>

        @else
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center">
                <div class="px-3 py-2 mb-1">

                    <div class="container d-flex flex-wrap justify-content-center">
                        <a href="{{ route("login.display") }}" class="btn text-white btn-sm me-2"
                            style="text-decoration:none; background-color:purple;border-radius:14px;background-image: linear-gradient(-155deg,rgba(190, 46, 247, 0.4) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(77,8,211,.2));background-color: rgba(88, 74, 214, 0.9);">LOGIN</a>
                        <a href="{{ route("register.display") }}" class="btn text-white btn-sm"
                            style="text-decoration:none; background-color:purple;border-radius:14px;background-image: linear-gradient(-155deg,rgba(190, 46, 247, 0.4) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(77,8,211,.2));background-color: rgba(88, 74, 214, 0.9);font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">REGISTER</a>

                    </div>
                </div>
            </div>
        </nav>
 @endif       


    </header>
    <div class="offcanvas offcanvas-start bg-dark" id="data" tabindex="-1" style="width: 200px">
        <div class="offcanvas-header navbar-brand">
            <div class="offcanvas-title fw-bold" style="color:white">
                <h6>Dashboard</h6>
            </div>
            <button type="button" class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body pl-md-0">
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a href="{{ route('user.home')}}" class="nav-link p-3 active" style="border-bottom:1px solid white;">Foto</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.album')}}" class="nav-link  p-3" style="border-bottom:1px solid white;">Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  p-3" style="border-bottom:1px solid white;">
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn bg-dark">LOGOUT</button>
                    </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>