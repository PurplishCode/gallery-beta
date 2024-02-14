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
    <section class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card"
            style="width:400px; height:500px;background-color:rgba(201, 63, 255, 0.842);border-radius:14px;background-image: linear-gradient(-155deg,rgba(178, 9, 245, 0.4) 45%,rgba(255, 255, 255, 0.08) 15%),linear-gradient(258deg,rgba(132, 87, 255, 0.1),rgba(77,8,211,.2));">
            <div class="container d-flex justify-content-center mt-3">
                <h1 class="text-white" style="font-family:Verdana, Geneva, Tahoma, sans-serif">REGISTER</h1>
            </div>
            <blockquote class="blockquote d-flex justify-content-center">
                <p class="lead text-white" style="font-size: 17px;">"Step and join the stage!"</p>
            </blockquote>
            <form action="{{ route('user.register') }}" method="POST" class="form-group pt-4">
                @csrf
                @method('POST')
                <div class="d-flex justify-content-center">
                    <input type="text" class="form-control-plaintext form-floating"
                        style="width:350px;border-bottom:1px solid black;" placeholder="Username" name="username">
            <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="d-flex justify-content-center pt-3">
                    <input type="email" class="form-control-plaintext form-floating"
                        style="width:350px;border-bottom:1px solid black;" placeholder="Email" name="email">
            
                </div>
                
                <div class="d-flex justify-content-center pt-3">
                    <input type="password" class="form-control-plaintext form-floating"
                        style="width:350px;border-bottom:1px solid black;" placeholder="Password" name="password">
            
                </div>
                <div class="d-flex justify-content-center pt-3">
                    <input type="text" class="form-control-plaintext form-floating"
                        style="width:350px;border-bottom:1px solid black;" placeholder="Nama Lengkap" name="namaLengkap">
            
                </div>
                
                <div class="d-flex justify-content-center pt-3">
                    <input type="text" class="form-control-plaintext form-floating"
                        style="width:350px;border-bottom:1px solid black;" placeholder="Alamat" name="alamat">
            
                </div>
                <div class="d-flex justify-content-center pt-3">
                <button class="btn btn-success btn-md" type="submit
                " style="width: 150px;">SUBMIT</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>