<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>Teachers</title>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="{{ URL::route('home') }}">
            <img class="logo-laravel" src="https://www.coine.it/wp-content/uploads/2022/03/laravel-featured.png" alt="logo Laravel">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link"
                href="{{ URL::route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="{{ URL::route('students') }}">Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
              href="{{ URL::route('teachers') }}">Teachers</a>
            </li>
          </ul>
        </div>
    </nav>
    {{-- /Navbar --}}


    <div class="content d-flex flex-column align-items-center">

        <h1 class="m-5">Teachers</h1>

        <div class="card p-3">
            <div class="card-body">
                <h5 class="card-title">Teachers list</h5>

                @foreach ($teachers as $teacher)
                    @if ($loop->first)
                        <h6 class="card-subtitle mb-2">Name: {{$teacher}} (sono il primo insegnante) </h6>
                    @elseif ($loop->last)
                    <h6 class="card-subtitle mb-2">Name: {{$teacher}} (sono l'ultimo insegnante) </h6>
                    @else
                        <h6 class="card-subtitle mb-2">Name: {{$teacher}} </h6>
                    @endif
                @endforeach

            </div>
        </div>

    </div>

</body>
</html>
