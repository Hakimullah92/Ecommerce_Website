<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="../CSSFiles/product.css">
</head>
<body>
    <?php
    include("header.php");
    ?>
    
<section class="product" id="product">
    <div class="container p-4">
    <div class="links mb-3">
            <a href="" class="text-dark text-decoration-none fs-4 text-uppercase">Home /</a>
            <a href="" class="text-dark text-decoration-none fs-4 text-uppercase">new arrival /</a>
            <a href="" class="text-dark text-decoration-none fs-4 text-uppercase">shafaq /</a>
            <a href="" class="text-dark text-decoration-none fs-4 text-uppercase">shafaq sq-05: Luxury embroidered peach leather</a>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-md-6 col-sm-12 col-12 position-relative">
                <img src="../images/product/one.webp" alt="" class="img-fluid mb-2" id="main">
                <div class="small-images d-flex gap-2">
                    <img src="../images/product/one.webp" alt="" class="small-img" style=" width: 100px;">
                    <img src="../images/product/two.webp" alt="" class="small-img" style=" width: 100px;">
                    <img src="../images/product/three.webp" alt="" class="small-img" style=" width: 100px;">
                </div>
                <a href="#" class="sale">Sale!</a>
            </div>
            <div class="col-md-5 col-sm-12 col-12">
                <h1 class="product-name text-uppercase">Shafaq SQ-05 : Luxury Embroidered Peach Leather</h1>
                <h4><span class="fs-1 text-secondary fw-bold text-decoration-line-through me-2">RS:7,600.00</span><span class="text-dark fs-2 fw-bold text-decoration-underline">RS:6,460.00</span></h4>
                <p class="fs-4 mt-3 mb-3">Luxury Embroidered Peach Leather 3pc Unstitched with Embroidered Shawl</p>
                <p class="fs-4">3 Meter Embroidered Peach Leather Shirt</p>
                <p class="fs-4">2.5 Meter Embroidered Shawl</p>
                <p class="fs-4 mb-3">2.5 Meter Plain Peach Leather Trouser</p>
                <h1 class="text-uppercase fs-1 fw-bold mt-3 mb-3">we offer:</h1>
                <h5 class="fs-3 fw-bold" style="color:rgb(54, 8, 54);"><ion-icon name="send-outline" class="me-3 text-dark"></ion-icon><span>Free Shipping Nationwide</span></h5>
                <h5 class="fs-3 fw-bold" style="color:rgb(54, 8, 54);"><ion-icon name="send-outline" class="me-3 text-dark"></ion-icon><span>Free Shipping Nationwide</span></h5>
                <h5 class="fs-3 fw-bold" style="color:rgb(54, 8, 54);"><ion-icon name="send-outline" class="me-3 text-dark"></ion-icon><span>Free Shipping Nationwide</span></h5>
                 <div class="buy mt-4">
                    <p class="fs-3 mb-3">In Stock</p>
                    <input type="number" value="1" class="pb-2 ps-3 pe-3 fs-2 mt-1 text-center" style="width:50px;">
                    <button class="btn text-white pt-2 pb-2 ps-3 pe-3 fs-2">Add To Cart</button>
                 </div>
                 <div class="social-links mt-5 d-flex gap-2">
                    <div class="link" style="background:#3b5998;"><ion-icon name="logo-facebook"></ion-icon></div>
                    <div class="link bg-primary"><ion-icon name="logo-twitter"></ion-icon></div>
                    <div class="link" style="background:#25D366;"><ion-icon name="logo-whatsapp" ></ion-icon></div>
                    <div class="link bg-danger"><ion-icon name="logo-pinterest"></ion-icon></div>
                 </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews mt-4 mb-5">
    <div class="container review-container">

    <div class="col-6 text">
        <h2 class="text-dark fs-1">Reviews</h2>
        <p class="fs-4">There are no reviews yet.</p>
        <p class="fs-5">Be the first to review “Shafaq SQ-16 : Luxury Embroidered Peach With Jacquard Shawl” our email address will not be published. Required fields are marked *</p>
        <p class="mb-3"><span class="fs-4">Your Rates:</span><div class="stars">
        <ion-icon name="star-outline" class="fs-2"></ion-icon>
        <ion-icon name="star-outline" class="fs-2"></ion-icon>
        <ion-icon name="star-outline" class="fs-2"></ion-icon>
        <ion-icon name="star-outline" class="fs-2"></ion-icon>
        </div></p>
    </div>
    <div class="input-group mb-3 mt-3">
    <div class="input-group">
  <textarea class="form-control border-dark" aria-label="With textarea" placeholder="Write Your Review Message!"></textarea>
</div>
<div class="mb-3 mt-3 col-lg-12 col-md-6 col-12">
  <label for="exampleFormControlInput1" class="form-label fs-3">Name*</label>
  <input type="text" class="form-control pt-3 pb-3 border-dark" id="exampleFormControlInput1" placeholder="Write Your Name Here...">
</div>
<div class="mb-3 mt-3 col-lg-12 col-md-6 col-12">
  <label for="exampleFormControlInput1" class="form-label fs-3">Email Address*</label>
  <input type="email" class="form-control pt-3 pb-3 border-dark" id="exampleFormControlInput1" placeholder="Write Your Email Here...">
</div>

<div class="form-check mt-2">
  <input class="form-check-input p-3 mt-1 border-dark" type="checkbox" value="" id="flexCheckIndeterminate">
  <label class="form-check-label fs-4 ms-2 mt-1" for="flexCheckIndeterminate">
  Save my name, email, and website in this browser for the next time I comment.
  </label>
</div>


    </div>
</section>

<section class="related-products mt-5">
    <div class="container p-4">
        <h1 class="heading fs-2 mb-3">Related Products</h1>
        <div class="row  justify-content-center mb-4">
   <div class="col-md-3 col-sm-6 mb-4 position-relative">
    <div class="image">
        <a href=""><img src="../images/product/sh1.webp" alt="pic"class="img-fluid w-100"></a>
    </div>
    <div class="text">
        <h3 class="text-uppercase fs-3 mt-2 mb-2">Shafaq sq-01: luxury embroidered peach leather</h3>
        <p class="text-uppercase fs-3 text-secondary mb-4"><span class="text-decoration-line-through">rs 7600.00  </span><sub class="text-dark text-decoration-underline fs-3 fw-bold"> RS6,640.00</sub></p>
        <a href="" class="cart text-white text-decoration-none text-capitalize fs-2 fw-light">add to cart</a>
    </div>
   </div>
   <div class="col-md-3 col-sm-6 mb-4 position-relative">
    <div class="image">
        <a href=""><img src="../images/product/sh2.webp" alt="pic"class="img-fluid w-100"></a>
    </div>
    <div class="text">
        <h3 class="text-uppercase fs-3 mt-2 mb-2">Shafaq sq-04: luxury embroidered peach leather</h3>
        <p class="text-uppercase fs-3 text-secondary mb-4"><span class="text-decoration-line-through">rs 7600.00  </span><sub class="text-dark text-decoration-underline fs-3 fw-bold"> RS6,640.00</sub></p>
        <a href="" class="cart text-white text-decoration-none text-capitalize fs-2 fw-light">add to cart</a>
    </div>
    
   </div>
   <div class="col-md-3 col-sm-6 mb-4 position-relative">
    <div class="image">
        <a href=""><img src="../images/product/sh3.webp" alt="pic"class="img-fluid w-100"></a>
    </div>
    <div class="text">
        <h3 class="text-uppercase fs-3 mt-2 mb-2">Shafaq sq-04: luxury embroidered peach leather</h3>
        <p class="text-uppercase fs-3 text-secondary mb-4"><span class="text-decoration-line-through">rs 7600.00  </span><sub class="text-dark text-decoration-underline fs-3 fw-bold"> RS6,640.00</sub></p>
        <a href="" class="cart text-white text-decoration-none text-capitalize fs-2 fw-light">add to cart</a>
    </div>
    
   </div>
   <div class="col-md-3 col-sm-6 mb-4 position-relative">
    <div class="image">
        <a href=""><img src="../images/product/sh4.webp" alt="pic"class="img-fluid w-100"></a>
    </div>
    <div class="text">
        <h3 class="text-uppercase fs-3 mt-2 mb-2">Shafaq sq-04: luxury embroidered peach leather</h3>
        <p class="text-uppercase fs-3 text-secondary mb-4"><span class="text-decoration-line-through">rs 7600.00  </span><sub class="text-dark text-decoration-underline fs-3 fw-bold"> RS6,640.00</sub></p>
        <a href="" class="cart text-white text-decoration-none text-capitalize fs-2 fw-light">add to cart</a>
    </div>
    
   </div>
  
 
        </div>
       
    </div>
</section>



    <?php
    include("footer.php");
    ?>
     <script src="../JSFiles/product.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>