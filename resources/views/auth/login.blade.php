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
            style="width: 350px; height: 400px;background-color:rgba(201, 63, 255, 0.842);border-radius:14px;background-image: linear-gradient(-155deg,rgba(178, 9, 245, 0.4) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(77,8,211,.2));">
            <div class="mt-3 d-flex justify-content-center container"><h2 class="text-white" style="font-family: Verdana, Geneva, Tahoma, sans-serif">LOGIN</h2></div>
            <blockquote class="blockquote d-flex justify-content-center">
                <p class="lead text-white" style="font-size: 18px;">"Beautiful Crystal underlays."</p>
            </blockquote>

            <form action="{{ route('user.login') }}" method="POST">
            @csrf
            @method('POST')
            <div class="d-flex justify-content-center pt-3">
                <input type="email" class="form-control form-floating"
                    style="width:270px;border:3px solid purple;" placeholder="Email" name="email">
        <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="d-flex justify-content-center pt-5">
                <input type="password" class="form-control form-floating"
                    style="width:270px;border:3px solid purple;" placeholder="Password" name="password">
            </div>
            <div class="d-flex justify-content-center pt-5">
                <button class="btn btn-success btn-md" type="submit
                " style="width: 150px;">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>