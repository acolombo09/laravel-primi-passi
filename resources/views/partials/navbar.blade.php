<header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-center align-items-center">
        <div class="navbar-nav">
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
  
</header>