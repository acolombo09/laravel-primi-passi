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

  <title>BLOG</title>
</head>

<body>
  {{-- <h1 class="text-danger">Hello World!</h1> --}}
  <div class="container mt-3">

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
      <h2 class="mt-3">Benvenuto nella sezione Contacts</h2>
    </div>
  </div>

  <div class="container py-3 min-vh-100 d-flex flex-column">
    <div class="card shadow rounded-3 my-auto">
      <div class="card-header p-3 h4">
        Contact Us
      </div>
      <div class="card-body p-4">
        <form role="form" class="row">
          <div class="form-group col-lg-4">
            <label class="form-control-label" for="form-group-input">Name</label>
            <input type="text" class="form-control" id="form-group-input" name="name">
          </div>
          <div class="form-group col-lg-4">
            <label class="form-control-label" for="form-group-input">Email</label>
            <input type="text" class="form-control" id="form-group-input" name="email">
          </div>
          <div class="form-group col-lg-4">
            <label class="form-control-label" for="form-group-input">Purpose of Request</label>
            <select size="0" class="form-control" name="reason">
              <option>Sales</option>
              <option>Tech Support</option>
              <option>General Feedback</option>
            </select>
          </div>
          <div class="form-group col-lg-12">
            <label class="form-control-label" for="form-group-input">Notes</label>
            <textarea class="form-control" id="form-group-input" name="notes" rows="6"></textarea>
          </div>
          <div class="form-group col-lg-12">
            <button class="btn btn-warning float-end mt-2" for="form-group-input">Send</button>
          </div>
        </form>
      </div>
    </div>
</div>

</body>

</html>