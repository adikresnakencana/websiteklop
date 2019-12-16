<?php
session_start();
//koneksi database
$koneksi = mysqli_connect("localhost","root","","klopstore");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- fontawesome style
    <link href="assets/css/fontawesome.css" rel="stylesheet" /> -->
    <!-- jquery  -->
    <script src="assets/js/jquery-3.4.1.js"></script>
    <!-- script BOOTSTRAP -->
    <script src="assets/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>

<body>



    <section>
        <!--navbar -->
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="keranjang.php">Keranjang</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">login</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="checkout.php">checkout</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

    </section> <!-- navbar -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <section class="carausel">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="foto_produk/foto1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="foto_produk/foto1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="foto_produk/foto2.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
                <section class="konten">
                    <div class="container">
                        <h1 align="center">NEW ARRIVAL</h1>
                        <div class="row">
                            <!-- php mengambil query -->
                            <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
                            <?php while($perproduk = $ambil->fetch_assoc()){ ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="thumbnail">
                                    <img src="foto_produk/<?php echo $perproduk['foto_produk'] ?>" alt="" class="card-img-top">
                                    <div class="caption">
                                        <h3 class="card-title"><?php echo $perproduk['nama_produk'] ?></h3>
                                        <h5 >Rp. <?php echo $perproduk['harga_produk'] ?></h5>
                                        <a href="" class="btn btn-primary">beli</a>
                                    </div>

                                </div>

                            </div>
                            <?php } ?>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>
   
</body>

</html>