<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Framework Bootstrap css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!-- Font Awesome CDN  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <title>HOME</title>
</head>

<script src="./script.js"></script>
<body>
  {{-- <h1 class="text-danger">Hello World!</h1> --}}
  <main>

    <div class="container mt-5">

      <div class="text-center mt-4">
        <h1 class="mt-5 text-danger">Ciao!</h1>
        <h2 class="mt-3">Ti diamo il benvenuto</h2>
      </div>

      @foreach ($headerLinks as $link)
        <ul class="list-group list-unstyled">
          <li class="list-item">
            <a class="link-success link-underline-opacity-25 link-underline-opacity-100-hover" href="/{{ ($link) }}">
              {{ $link }}
            </a>
          </li>
        </ul>
      @endforeach

    </div>

</main>
</body>

</html>