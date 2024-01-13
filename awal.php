<?php
require 'conection.php';

$tes = 19;
function jinja() {
    echo "ini halaman haha";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
    /* header awal */

    header {
        margin-top: 68px;
    }

    header .poster {
        width: 100%;
        height: 300px;
    }


    header .p-img {
        width: 100%;
    }

    /* header akhir */

    /* nav awal */

    input.me-2 {
        width: 800px;
    }

    nav .collapse {
        display: flex;
        gap: 10px;
    }

    /* nav akhir */

    /* section awal */

    section {
        margin-top: 50px;
    }

    section .container .card-body {
        border-left: 4px solid orange;
    }

    section ul {
        flex-wrap: wrap;
        gap: 27px;
    }

    section ul li {
        width: 22.5%;
        list-style-type: none;
    }

    section .p-img {
        max-width: 243px;
        background-color: rgba(0, 0, 0, 0.04);
        display: flex;
        border-radius: 4px;
        height: 150px;
    }

    section .p-img img {
        display: flex;
        margin: auto;
        width: 150px;
        height: 130px;
    }

    /* section akhir */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="poster">
            <h1>ini header</h1>
            <!-- <img class="p-img-one" src="img/4.jpg" alt=""> -->
        </div>
    </header>

    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a rel="" data-aut-id="btnOlxLogo" aria-current="page" class="" href="/">
                <picture>
                    <source type="image/svg+xml"
                        srcset="https://statics.olx.co.id/olxid/astra_branding/olx-indonesia-logo.svg"><img
                        src="https://statics.olx.co.id/olxid/astra_branding/olx-indonesia-logo.svg" class="Z6j57"
                        alt="OLX Autos Indonesia" width="180" height="48">
                </picture>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d30">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Semua Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Avanza</a></li>
                        <li><a class="dropdown-item" href="#">Fortuner</a></li>
                        <li><a class="dropdown-item" href="#">Jeep</a></li>
                    </ul>
                </div>
                <form class="d-flex" role="search" action="" method="get">
                    <input class="form-control me-2" type="search" placeholder="Temukan Mobil impian anda"
                        aria-label="Search" name="submit">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>


    <section class="">
        <div class="container d-flex">
            <div class="card-dm mt-3">
                <ul class="d-flex container-ul">
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="con-li">
                        <div class="card">
                            <div class="p-img">
                                <img src="img/2.jpg" class="size" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Rp 115.000.000</h5>
                                <p class="card-text">2018 <br> mitshubitsi xpander</p>
                                <p class="card-text"><small class="text-body-secondary">jakarta selatan</small>
                                </p>
                            </div>
                        </div>
                    </li>
            </div>
            </ul>
        </div>
    </section>


    <footer>
        <h1>ini footer</h1>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>