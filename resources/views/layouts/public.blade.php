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

  <title>@yield("title")</title>
</head>

<body>
  @include("partials.navbar")
  <main>
    {{-- segnaposto che verrà sostituito con il contenuto di ogni pagina --}}
    {{-- nelle altre pagine devo indicare cosa inserire in questo segnaposto --}}
    @yield("content")
  </main>
  @include("partials.footer")
</body>

</html>