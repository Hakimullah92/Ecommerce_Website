<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- ============== Bootstrap CSS File Link============= -->

    <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- ================= Custom CSS File=================== -->

    <link rel="stylesheet" href="../CSSFiles/header.css">
</head>
<body>
<header class="header">
<nav class="navbar opacity-5 fixed-top navigation">
  <div class="container-fluid">
      <ion-icon name="menu-outline" class="fs-1" id="menu"></ion-icon>
    <a class="navbar-brand m-auto text-dark text-uppercase fs-1" href="#">kleren</a>
    <i class="fa-solid fa-bars-filter"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <ion-icon name="lock-closed-outline" class="fs-1 text-dark"></ion-icon>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Cart Here</h5>
        <button type="button" class="btn-close fs-2 text-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      
      <div class="offcanvas-body">
        <div class="empty text-uppercase text-dark text-center fs-2 fw-light mt-4">No products in the cart.</div>
      </div>
    </div>
  </div>
</nav>
<div class="menu">
    <div class="icon"><ion-icon name="close-outline" class="text-white fs-1" id="close"></ion-icon> </div>

  <h1 class="text-white text-center text-uppercase">kleren</h1>
  <ul class="menu-list mt-5 text-white">
    <li class="mb-1"><a href="home.php" class="menu-link text-white text-decoration-none fs-2 fw-light">HOME</a></li>
    <li class="nav-item dropdown mb-1">
          <a class="nav-link dropdown-toggle menu-link text-white text-decoration-none fs-2 fw-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NEW ARRIVAL
          </a>
          <ul class="dropdown-menu position-relative">
          <li><a class="dropdown-item fs-3 fw-light text-dark mb-2" href="shafaq.php">SHAFAQ: EMB PEACH LEATHER</a></li>
          <li><a class="dropdown-item fs-3 fw-light text-dark" href="shafaq.php">Diyar-E-DIL: EMB PEACH LEATHER</a></li>
            
          </ul>
</li>
    <li class="nav-item dropdown mb-1">
          <a class="nav-link dropdown-toggle menu-link text-white text-decoration-none fs-2 fw-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            WINTER COLLECTIONS
          </a>
          <ul class="dropdown-menu position-relative">
          <li><a class="dropdown-item fs-3 fw-light text-dark mb-2" href="mehr_o_maah.php">MEHR-O-MAAH: EMB SLUB KARANDI</a></li>
          <li><a class="dropdown-item fs-3 fw-light text-dark" href="tehzeeb.php">TEHZEEB: EMB SLUB KARANDI </a></li>
          <li><a class="dropdown-item fs-3 fw-light text-dark" href="dhanak.php">DHANAK: EMB DHANAK </a></li>
          <li><a class="dropdown-item fs-3 fw-light text-dark" href="imroz.php">IMROZ: SILK VISCOSE  </a></li>
          <li><a class="dropdown-item fs-3 fw-light text-dark" href="hermosa.php">HERMOSA: EMBROIDERED LINEN</a></li>
          <li><a class="dropdown-item fs-3 fw-light text-dark" href="noura.php">NOURA: EMBROIDERED KHADDAR</a></li>
            
          </ul>
</li>


        <li class="nav-item dropdown mb-1">
          <a class="nav-link dropdown-toggle menu-link text-white text-decoration-none fs-2 fw-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SUMMER COLLECTIONS
          </a>
          <ul class="dropdown-menu position-relative">
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="eleganza.php">ELEGENZA: EMB. & PRINTED LAWN</a></li>
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="qalb.php">QALB: EMBROIDERED LAWN</a></li>
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="ibtida.php">IBTIDA: EMBROIDERED LAWN</a></li>
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="surkhru.php">SURKHRU: EMBROIDERED LAWN</a></li>
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="naqsh.php">NAQSH: EMBROIDERED LAWN
            </a></li>
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="uns.php">UNS: PRINTED & EMBROIDERED LAWN</a></li>
            <li><a class="dropdown-item fs-3 fw-light text-dark" href="farda.php">FARDA: EMBROIDERED SWISS LAWN</a></li>
          </ul>
        </li>
      
    <li class="mb-1 w-100"><a href="collections.php" class="menu-link text-white text-decoration-none fs-2 fw-light">VIEW ALL COLLECTIONS</a></li>
    <li class="mb-1 w-100"><a href="View_all_dresses.php" class="menu-link text-white text-decoration-none fs-2 fw-light">VIEW ALL DRESSES</a></li>
    <li class="mb-1 w-100"><a href="trackorder.php" class="menu-link text-white text-decoration-none fs-2 fw-light">TRACK YOUR ORDER</a></li>
    <li class="mb-1 w-100"><a href="contact.php" class="menu-link text-white text-decoration-none fs-2 fw-light">CONTACT US</a></li>
  </ul>


</div>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
</header>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- ================ Custom JS File================== -->

    <script src="../JSFiles/header.js"></script>
</body>
</html>