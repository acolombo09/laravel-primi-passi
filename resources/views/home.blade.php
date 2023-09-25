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

<body>
  {{-- <h1 class="text-danger">Hello World!</h1> --}}
  <div class="container my-3">

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center align-items-center">
          <div class="navbar-nav">
            {{-- Così funzionava ma se cliccavo il link home non mi reindirizzava, ho aggiunto una condizione 
              per gestire l'aggiunta del / nel link--}}
            {{-- @foreach ($headerLinks as $link)
              <ul class="list-group list-unstyled">
                <li class="list-item"></li>
                  <a class="link-success link-underline-opacity-25 link-underline-opacity-100-hover" href="/{{ strtolower($link) }}">
                    {{ $link }}
                  </a>
                </li>
              </ul>
            @endforeach --}}
            <ul class="list-group list-unstyled d-flex flex-row justify-content-center align-items-center">
            @foreach ($headerLinks as $link)
              <li class="list-item"></li>
              @if ($link === 'HOME')
                <a class="nav-link link-success link-underline-opacity-25 link-underline-opacity-100-hover fw-bold" href="/">
                  {{ $link }}
                </a>
              @else
                <a class="nav-link link-success link-underline-opacity-25 link-underline-opacity-100-hover fw-bold" href="/{{ strtolower($link) }}">
                  {{ $link }}
                </a>
              @endif
              </li>
            @endforeach
            </ul>

          </div>
        </div>
      </div>
    </nav>

    <div class="text-center mt-3">
      <h1 class="text-danger">Ciao!</h1>
      <h2 class="mt-3">Benvenuto nella home</h2>
    </div>

  </div>

  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>