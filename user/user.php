<?php
require('user\connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SD-Tech</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="..\fontawesome-free-6.1.1-web\fontawesome-free-6.1.1-web\css\all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body style="background-color: #f1f3f4">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end mb-5">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#">
                <img src="..\img\Logo White.png" alt="" width="200px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-block w-100">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-lg-end">
                        <li>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sigit Indriyanto
                            </a>
                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item" href="..\login\login.html">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Container Start-->
    <div class="container">
        <div class="text-center d-block mb-4">
            <h1>Welcome to SD-Tech</h1>
        </div>
        <div class="d-lg-flex flex-row flex-wrap justify-content-lg-evenly">
            <!-- Button trigger modal -->
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">

                <div class="card m-3 card-text-center border-light" style="width: 18rem;  height: 14rem">
                    <div class="card-body text-center">
                        <i class="fa-sharp fa-solid fa-qrcode mb-3" style="font-size: 60px"></i>
                        <h3>My QR Code</h3>
                        <p class="card-text">Show your QR code for ID scanning</p>
                    </div>
                </div>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                                <h5 class="modal-title text-center" id="exampleModalLabel">
                                    My QR Code
                                </h5>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <div>
                                <p class="fs-1">Scan Me</p>
                                <img src="..\img\frame.png" class="img-fluid border-radius rounded border border-dark border-5" alt="" />
                                <h3 class="mt-3">582344</h3>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn">
                <a href="drawer-status.html" class="text-decoration-none text-dark">
                    <div class="card m-3 border-light" style="width: 18rem; height: 14rem">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-file-pen mb-3 text-primary" style="font-size: 60px"></i>
                            <h3> Drawer Status</h3>
                            <p class="card-text">View the detail of all drawers</p>
                        </div>
                    </div>
                </a>
            </button>
            <button class="btn">
                <a href="borrowed-tools.html" class="text-decoration-none text-dark ">
                    <div class="card m-3 border-light " style="width: 18rem; height: 14rem">
                        <div class="card-body text-center ">

                            <i class="fa-solid fa-screwdriver-wrench mb-3 text-danger" style="font-size: 60px"></i>
                            <h3> Borrowed Tools</h3>
                            <p class="card-text">Show your borrowed tools history</p>
                        </div>
                    </div>
                </a>
            </button>
            <button class="btn">
                <a href="borrowed-drawer.html" class="text-decoration-none text-dark">
                    <div class="card m-3 border-light" style="width: 18rem; height: 14rem">
                        <div class="card-body text-center">

                            <i class="fa-solid fa-list mb-3 text-warning" style="font-size: 60px"></i>
                            <h3> Borrowed Drawer</h3>
                            <p class="card-text">Show your borrowed drawer tool list</p>
                        </div>
                    </div>
                </a>
            </button>
            <button class="btn">
                <a href="guide.html" class="text-decoration-none text-dark">
                    <div class="card m-3 border-light border-light" style="width: 18rem; height: 14rem">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-book mb-3 text-success" style="font-size: 60px"></i>

                            <h3> SD-Tech Guide</h3>
                            <p class="card-text">See the guidance of Smart Drawer Technology (SD-Tech)</p>
                        </div>
                    </div>
                </a>
            </button>
        </div>
        <!-- Container End -->
</body>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</html>