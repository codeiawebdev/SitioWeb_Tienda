<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>
    <!-- BOOTSTRAP 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- ICONOS DE BOXICONS 2.1.4 -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- CSS PERSONAL -->
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>

    <div class="custom-container-spinner">
        <div class="spinner-border text-light" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <nav class="navbar navbar-expand-xl navbar-light bg-light py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-xl-0" href="index.html">
                <img src="assets/img/logo/logo_img.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                <span class="text-uppercase fw-lighter ms-2">Logo</span>
            </a>
            <div class="order-xl-2 nav-btns">
                <button type="button" class="btn position-relative click-modal-demo">
                    <i class="bx bxs-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge custom-bg-primario">5</span>
                </button>
                <button type="button" class="btn position-relative click-modal-demo">
                    <i class="bx bxs-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge custom-bg-primario">5</span>
                </button>
                <button type="button" class="btn position-relative click-modal-demo">
                    <i class="bx bx-search"></i>
                </button>
                <button type="button" class="btn position-relative click-modal-demo">
                    <i class="bx bx-user"></i>
                </button>
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContenidoMenu" aria-controls="navbarContenidoMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-xl-1" id="navbarContenidoMenu">
                <ul class="navbar-nav mx-auto text-center mb-2 mb-lg-0">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#header">Inicio</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#catalago">Catálogo</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#ofertas">Ofertas Especiales</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#blogs">Blogs</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase" href="#nosotros">Nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active">
                <h2 class="text-capitalize text-white">Sitio web para tienda</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">2024</h1>
                <a href="#" class="btn mt-3 text-uppercase click-modal-demo">Comprar ahora</a>
            </div>
            <div class="text-center carousel-item">
                <h2 class="text-capitalize text-white">Mejor precio y oferta</h2>
                <h1 class="text-uppercase py-2 fw-bold text-white">80% de Descuento</h1>
                <a href="#" class="btn mt-3 text-uppercase click-modal-demo">Comprar ahora</a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </header>


    <?php include_once 'components/catalago.php'; ?>

    <?php include_once 'components/descuento.php'; ?>

    <?php include_once 'components/ofertas.php'; ?>

    <?php include_once 'components/blogs.php'; ?>

    <?php include_once 'components/nosotros.php'; ?>

    <?php include_once 'components/subscribe.php'; ?>

    <?php include_once 'components/demo.php'; ?>

    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a class="text-uppercase text-decoration-none brand text-white" href="index.html">Logo</a>
                    <p class="text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, facilis optio? Neque consequuntur praesentium sit dolores fugit. Dolorem, possimus cumque, earum fugiat sed, nihil harum minus molestias ab doloremque accusamus!</p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="#header" class="text-white text-decoration-none text-muted">
                                <i class="bx bx-chevron-right me-1"></i> Inicio
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#catalago" class="text-white text-decoration-none text-muted">
                                <i class="bx bx-chevron-right me-1"></i> Cátalago
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#ofertas" class="text-white text-decoration-none text-muted">
                                <i class="bx bx-chevron-right me-1"></i> Ofertas Especiales
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#blogs" class="text-white text-decoration-none text-muted">
                                <i class="bx bx-chevron-right me-1"></i> Blogs
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="#nosotros" class="text-white text-decoration-none text-muted">
                                <i class="bx bx-chevron-right me-1"></i> Nosotros
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Contacte con nosotros</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="bx bx-map-alt"></i>
                        </span>
                        <span class="fw-light">
                            Lima
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="bx bx-envelope"></i>
                        </span>
                        <span class="fw-light">
                            sitio.support@info.com
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="bx bx-phone"></i>
                        </span>
                        <span class="fw-light">
                            +0000 0000 000
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Síguenos</h5>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="bx bxl-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- BOOTSTRAP 5.1.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <!-- JQUERY 3.7.0 -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- ISOTOPE -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>



    <!-- PROCESO -->
    <script type="text/javascript" src="assets/js/custom_spinner.js"></script>
    <script type="text/javascript" src="assets/js/custom_isotope.js"></script>
    <script type="text/javascript" src="assets/js/modal_demo.js"></script>

</body>

</html>