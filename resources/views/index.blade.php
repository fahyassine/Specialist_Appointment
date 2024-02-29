<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card:hover {
          transform: scale(1.05);
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
      </style>
</head>
<body>
    <div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                 @if (Route::has('register'))
                     <a  href="{{ route('register') }}" class="navbar-brand text-darck ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                 @endif
            </div>
        @endif
    </div >

    <div class="container h-100  ">
        <h1 class="text-center text-primary pt-5">Log in</h1>
        <div class="row justify-content-center   ">
          <div  class="col-md-6 d-flex justify-content-center ">
            <div  class=" col-md-6 card px-0">
                <a class="card-link text-decoration-none " href="{{ route('login') }}"> <img  class="card-img-top pt-5" src="{{ asset('images/patient.jpg') }}" alt="patient image">
                <div class="card-body text-decoration-none p-0">
                <h1 class="text-center card-text pt-2 h-100">patient</h1>
                </a>
                </div>
            </div >
            <div class="col-md-6 card ">
                <a class="card-link text-decoration-none" href="{{ route('login') }}"><img class="card-img-top" src="{{ asset('images/Doctor.jpg') }}"  alt="doctor image">
                <div class="card-body">
                <h1 class="text-center text-darck ">doctor</h1>
                </div>
                </a>
            </div>
          </div>
        </div>
      </div>
   </div>
</body>
</html>
