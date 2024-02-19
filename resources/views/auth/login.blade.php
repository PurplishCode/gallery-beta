<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @include('layout.style')
    @include('layout.script')
</head>

<body class="bg-dark">
    <section class="d-flex justify-content-center  align-items-center min-vh-100">
        <div class="card"
            style="width: 500px; height: 460px;background-color:rgba(8, 82, 219, 0.842);border-radius:14px;background-image: linear-gradient(-155deg,rgba(2, 65, 73, 0.74) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(40, 5, 110, 0.2));">
            <div class="mt-3 d-flex justify-content-center container "><h2 class="text-white" style="font-family: cursive">LOGIN</h2></div>
            <blockquote class="blockquote d-flex justify-content-center">
                <p class="lead text-white" style="font-size: 20px;">"Trial and Errors"</p>
            </blockquote>

            <form action="{{ route('user.login') }}" method="POST">
            @csrf
            @method('POST')
           <div class="form-group px-3">
            <label for="email" class="pb-2 fw-bold text-white">
                Email Address
            </label>
            <input type="email" class="form-control border text-white" style="width:470px;border-radius:10px;border:solid gray;" placeholder="Your email address..">
           </div>
            {{-- <div class="row pt-3">
                <label for="" class="pb-1">EMAIL</label>
                <input type="email" class="form-control form-floating bg-dark text-white"
                    style="width:300px;height:50px;" placeholder="Email" name="email">
@error('email')
<div class="invalid-feedback">Please fill out this field.</div>
@enderror
            </div> --}}
            <div class="form-group px-3 pt-5">
                <label for="password" class="pb-2 fw-bold text-white">
                    Password
                </label>
                <input type="password" class="form-control border text-white" style="width:470px;border-radius:10px;border:solid gray;" placeholder="Your Password..">
               </div>
            <div class="d-flex justify-content-center pt-5">
                <button class="btn btn-success btn-lg" type="submit
                " style="width: 300px;">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>