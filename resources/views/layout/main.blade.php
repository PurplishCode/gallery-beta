<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Including necessary layouting style / script -->
    @include('layout.style')
    @include('layout.script')

</head>

<body>
    @include('layout.navbar')
    @yield('content')
</body>

</html>