<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Layout</title>
</head>
<body>
    
    <div class="container-fluid">

        <div id="navbar">
            <div class="row">

                <div class="col-12 col-lg-2">
                    <img src="https://w7.pngwing.com/pngs/772/172/png-transparent-film-cinema-television-android-thumbnail.png" width="120px" height="120px" alt="Logo" id="logo">
                </div>
                
                <div class="col-12 col-lg-7">
                    <a href="#">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                </svg>
                            Accedi
                            </span>
                    </a>

                    <a href="#">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg>
                        Home
                        </span>
                    </a>

                    <a href="#">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                            </svg>
                        Film
                        </span>
                    </a>

                    <a href="#">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                            </svg>
                    Serie TV
                        </span>
                    </a>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="form">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <main class="container-fluid">

        @yield('content')

        </main>
        
        <footer>

            <div>
                <b class="copyright">Copyright</b>
            </div>

            <div>
                <b class="footer_info">Condizioni d'uso</b>
                <b class="footer_info">Informativa sulla privacy</b>
                <b class="footer_info">Area Legale</b>
                <b class="footer_info">Cookie</b>
            </div>
            <div><br />
                <b class="footer_info">@2023 Lorem ipsum dolor sit amet consectetur adipisicing elit consectetur elit.</b>
            </div>

        </footer>
    </div>

</body>
</html>

