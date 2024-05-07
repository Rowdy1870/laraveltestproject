<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Test</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('/') }}assets/plugin/fontawasome/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}assets/dist/css/sidebar.css" rel="stylesheet">
        <link href="{{ asset('/') }}assets/dist/css/profil.css" rel="stylesheet">
  </head>
  <body>
    {{-- navbar --}}
       <!-- Navbar and Sidebar -->
       <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Pengajuan Cuti
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Riwayat Cuti
                            </a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown-center">
                      <button class="btn btn-secondary dropdown-toggle btn btn-success" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu Akun
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item">Level: {{Auth::user()->role}}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="dropdown-item text-danger" href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
                      </ul>
                    </div>
                </nav>
                <div class="container">
                  @yield('profil')
                </div>
                <div class="container">
                    @yield('register')
                  </div>
            </main>
        </div>
    </div>
       
    {{-- end --}}
    {{-- sidebar --}}
    
    {{-- content --}}
    <div>
      <div class="container">
        @yield('home')
      </div>
    </div>
    {{-- end content--}}
    <script src="{{ asset('/') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>