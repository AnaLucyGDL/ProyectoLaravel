<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MDBootstrap -->
    <script src="https://kit.fontawesome.com/825719bb21.js" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">

    <script scr="{{asset('js/mdb.min.js')}}"></script>
    <title>Desarrollo web profesional</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/formulario">Sign In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://wallpapertag.com/wallpaper/full/9/8/e/481355-best-spyro-the-dragon-wallpaper-1920x1080-pc.jpg');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Retro Videogames</h1>
                <h4 class="mb-3">PS2, PS3</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                >Videogames</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <div class="container mt-5 mb-5">

        <h1>@yield('titulo')</h1>
      
        <hr class="hr">
      
        @yield('contenido')
      
      </div>
      <footer class="bg-success text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(116, 62, 140, 0.694);">
    ?? 2023 Copyright:
    <a class="text-white" href="">Ana Lucia Guzm??n De Loera</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>