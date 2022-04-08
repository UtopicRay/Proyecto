<<!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">

        <title>Hola Mundo</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap-5.1.1-dist/css/bootstrap.css">
    </head>

    <body>
        <?php $txt1 = "Aprendiendo PHP";
        echo "<footer>" . $txt1 . "</footer>";
        echo date("Y/m/d h:i:sa") ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <section class="Inicio">
            <div>
                        <header>Hola Mundo</header>
                        <button id="uni" type="button" class="btn btn-success">Suscribirse</button>
                    </div>               
        </section>
        <section class="Medio">
            <div class="pds">
                <h1>Hello World</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatum magnam sapiente sint! Repudiandae ducimus eveniet inventore, voluptatem odit provident dolorem! Nemo numquam temporibus reiciendis voluptates qui natus libero! Veritatis.</p>
            </div class="pds">
            <h1>Hello World</h1>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil impedit temporibus quisquam. Temporibus qui dolores ullam architecto, esse unde mollitia.</p>
            </div>

        </section>
        <section class="Final">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem minus expedita itaque vitae temporibus facilis saepe ut? In, ut exercitationem?</h1>
                        <img src="img/download (13).jfif" alt="Foto de Yugi">
                    </div>
                    <div class="carousel-item">
                        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, expedita beatae minus incidunt id quia! Impedit earum ullam minima consectetur..</h1>
                        <img class="fotos-carusel" src="img/download (11).jfif" alt="Foto de cualquiera">
                    </div>
                    <div class="carousel-item">
                        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat tenetur rem ipsam dolorem excepturi qui in enim ipsa? Pariatur, quis.</h1>
                        <img class="fotos-carusel" src="img/download (9).jfif" alt="Foto de presentacion">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>
        <script src="bootstrap-5.1.1-dist/js/bootstrap.js"></script>
    </body>

    </html>