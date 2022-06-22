<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Home</title>
</head>
<body>

  <div class="content d-flex flex-column align-items-center">

    <h1 class="m-5">Hello World</h1>

    <div class="card p-3">
        <div class="card-body">
            <h5 class="card-title">User</h5>
            <h6 class="card-subtitle mb-2">Name: {{$name}} </h6>
            <p class="card-text">Age: {{$age}} </p>
        </div>
    </div>

  </div>

</body>
</html>
