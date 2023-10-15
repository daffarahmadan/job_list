<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Job Listing</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <style>
            /* CSS untuk membuat footer tetap di bawah */
      body {
          display: flex;
          flex-direction: column;
          min-height: 100vh;
      }

      footer {
          margin-top: auto;
      }
    </style>
  </head>
  <body style="background-color: #f4f4f4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">Lowongan Kerja</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex" method="get" action="{{ route('search') }}"role="search">
            <input
              class="form-control me-2"
              type="search"
              name="search"
              value="{{ request()->get('search') }}"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>  
          <ul class="navbar-nav mx-auto"> 
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Kontak Kami</a>
            </li>
          </ul>
          <ul class="navbar-nav"> 
            <li class="nav-item">
              <a class="nav-link" href="">Sign Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <footer class="bg-dark text-center text-white py-3">
      Let's Find Job That You Love
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
