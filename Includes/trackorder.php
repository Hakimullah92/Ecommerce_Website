<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order</title>

    <!-- ================= Custom CSS File=================== -->

    <link rel="stylesheet" href="../CSSFiles/trackorder.css">
</head>
<body>
<?php
    include("header.php");
    ?>
<section class="tract-order" id="track-order">
    <div class="container">
        <div class="row heading-container">
            <h1 class="main-heading text-uppercase text-secondary text-center fs-1 mb-5"><span>Tract your order</span></h1>
            <div class="col-12 fs-2 text-center mb-5">To track your order please enter the following details and press the "Track" <br> button.</div>
        </div>

       <div class="row">
        <form>
  <div class="row mb-3 justify-content-center">
    <div class="col-md-6 col-sm-12 p-2">
        <label for="" class="mb-2 fs-3">Old Number</label>
      <input type="number" class="form-control p-3" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3 justify-content-center">
    <div class=" col-md-6 col-sm-12 p-2">
        <label for="" class="mb-2 fs-3" >Mobile Number</label>
      <input type="number" class="form-control p-3" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3 justify-content-center">
    <div class=" col-md-6 col-sm-12 p-2">
      <button class="track-btn fs-2 w-100 text-white p-2">Track</button>
    </div>
  </div>
  
</form>
</div>
    </div>
</section>

<?php
    include("footer.php");
    ?>
</body>
</html>