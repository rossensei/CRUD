<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT SEMIFINAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300&family=Titillium+Web:ital,wght@0,200;0,400;1,300&display=swap');
    * {
        font-family: 'Manrope', sans-serif;
    }
    .nav-link {
        font-weight: 900;
    }
    </style>
</head>

<body style="
    background-color: #a8d6a8;
    ">
    <div class="w-100 ">
        <nav class="navbar navbar-expand-lg mx-auto fixed-top shadow-lg" style="background-color: #bbeebb;">
            <div class="container d-flex justify-content-center">
            <ul class="nav d-flex justify-content-evenly">
                <li class="nav-item text-dark">
                    <a class="nav-link text-dark" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark">|</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{url('/stores')}}">Stores</a>
                </li>
                </ul>
            </div>
        </nav>

    </div>
    
    <div class="container">
        @yield('content')
    </div>

</body>
</html>