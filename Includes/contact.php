<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order</title>
    <!-- ============== Bootstrap CSS File Link============= -->

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

    <!-- ================= Custom CSS File=================== -->

    <link rel="stylesheet" href="../CSSFiles/contact.css">
</head>
<body>
<?php
    include("header.php");
    ?>
<section class="contact" id="contact">
    <div class="container">
        <div class="row heading-container">
            <h1 class="main-heading text-uppercase text-secondary text-center fs-1 mb-5"><span>Contact Us</span></h1>
            <h1 class=" heading text-center text-uppercase fw-light ">How can We help?</h1>
            <div class="col-12 fw-light fs-4 text-center mb-5">If you have any questions, please fill out the form <br> below and We’ll get back to you as soon as possible.</div>
        </div>

       <div class="row">
        <form>
  <div class="row mb-3 justify-content-center">
    <div class="col-md-6 col-sm-12 p-2">
        <label for="" class="mb-2 fs-3">Your Name</label>
      <input type="text" class="form-control p-3" id="inputName">
    </div>
  </div>
  <div class="row mb-3 justify-content-center">
    <div class=" col-md-6 col-sm-12 p-2">
        <label for="" class="mb-2 fs-3" >Your Email</label>
      <input type="number" class="form-control p-3" id="inputemail">
    </div>
  </div>
  <div class="row mb-3 justify-content-center">
    <div class=" col-md-6 col-sm-12 p-2">
    <label for="" class="mb-2 fs-3" >I’d Like To Ask About...</label>
        <textarea name="" id="" cols="108" rows="6"></textarea>
    </div>
  </div>
  <div class="row mb-3 justify-content-center">
    <div class=" col-md-2 col-sm-12 p-2">
      <button class="contact-btn fs-2 w-100 text-white p-2">Submit</button>
    </div>
  </div>
  
</form>
</div>
    </div>
</section>

<?php
    include("footer.php");
    ?>


    <!-- =============== Ionicons JS Links==================== -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   <!-- ===================== Bootstrap JS File Link=================== -->

    <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>