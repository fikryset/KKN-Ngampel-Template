<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ngampel Siaga COVID-19 | KKN PPM UGM 2020</title>
        <link rel="icon" type="image/png" href="{{ url('/file_storage/dpkm.png')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/mycss.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- <script src="https://use.fontawesome.com/bb9ffd5e4a.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
        {{-- <script src="https://use.fontawesome.com/bb9ffd5e4a.js"></script> --}}
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark navbar-expand" style="background-color: #1a2c43">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/qna">Tanya Jawab</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/formlapor">Pantau Warga</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://corona.jatengprov.go.id/screening">Deteksi Mandiri</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron jumbotron-fluid py-4" style="background-color: #0277BD">
                <div class="container">
                    @yield('judul')
                </div>
            </div>
        </header>
        
        <div class="container-fluid konten">
            @yield('konten')
        </div>

        <br>
        <br>
        <footer class="footer">
            <div class="container-fluid">
                <span class="text-muted"> © 2020 | KKN-PPM UGM NGAMPEL BLORA </span>
            </div>
        </footer>


    </body>
</html>