<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KIDO</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,700;0,900;1,100;1,200;1,500;1,600&family=PT+Serif:ital@1&family=Poppins&family=Rubik+Puddles&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=PT+Serif:ital@1&family=Poppins&family=Rubik+Puddles&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="css/main.css">
  <!-- ICONS -->
  <script src="https://kit.fontawesome.com/d47a70c7a4.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <a class="navbar-brand" href="#"><i class="icon fa-brands fa-kickstarter-k"></i> <i class="icon2 fa-solid fa-i"></i> <i class="icon3 fa-solid fa-d"></i> <i class="icon4 fa-solid fa-o"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#header"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-regular fa-address-card"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-brands fa-shopify"></i> Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-regular fa-newspaper"></i> News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 round" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary button-clr color-red" type="submit"> Search</button>
      </form>
    </div>

  </nav>

  <!-- header -->
  <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
    <div class="container h-100 d-flex align-items-center carousel-inner">
      <div class="text-center carousel-item active">
        <h2 class="text-capitalize text-white" id="h2">best collection</h2>
        <h1 class="text-uppercase py-2 fw-bold ">new arrivals</h1>
        <a href="#" class="btn mt-3 text-uppercase">shop now</a>
      </div>
      <div class="text-center carousel-item">
        <h2 class="text-capitalize text-white" id="h2">best price & offer</h2>
        <h1 class="text-uppercase py-2 fw-bold ">new season</h1>
        <a href="#" class="btn mt-3 text-uppercase">buy now</a>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </header>
  <!-- end of header -->

  <!-- collection -->
  <section id="collection" class="py-5">
    <div class="container">
      <div class="title text-center">
        <h2 class="position-relative d-inline-block change-clr">NEW COLLECTIONS</h2>
      </div>

      <div class="row g-0">
        <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
          <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
          <button type="button" class="btn m-2 text-dark" data-filter=".best">Best Sellers</button>
          <button type="button" class="btn m-2 text-dark" data-filter=".feat">Featured</button>
          <button type="button" class="btn m-2 text-dark" data-filter=".new">New Arrival</button>
        </div>

        <div class="collection-list mt-4 row gx-0 gy-3">
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="images/c_formal_gray_shirt.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="images/c_pant_girl.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
            <div class="collection-img position-relative">
              <img src="images/c_polo-shirt.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="images/c_shirt-girl.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="images/c_t-shirt_men.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
            <div class="collection-img position-relative">
              <img src="images/c_tunic-shirt_girl.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
            <div class="collection-img position-relative">
              <img src="images/c_undershirt.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
            <div class="collection-img position-relative">
              <img src="images/c_western-shirt.png" class="w-100">
              <span class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
            </div>
            <div class="text-center">
              <div class="rating mt-3">
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
                <span class="text-primary"><i class="fas fa-star"></i></span>
              </div>
              <p class="text-capitalize my-1">gray shirt</p>
              <a href="#" class="btn btn-primary" id="btn1">
                Buy now <i class="fa-solid fa-basket-shopping"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of collection -->

  <!-- special Collection -->
  <section id="special" class="py-5">
    <div class="container">
      <div class="title text-center py-5">
        <h2 class="position-relative d-inline-block">SPECIAL COLLECTION FOR KIDS</h2>
      </div>

      <div class="special-list row g-0">
        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <img src="images/special_product_1.jpg" class="w-100 " height="350px">
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
              <i class="fas fa-heart"></i>
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">gray shirt</p>
            <span class="fw-bold d-block">$ 45.50</span>
            <a href="#" class="btn btn-primary mt-3">Add to Cart <i class="fa-solid fa-cart-plus"></i></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <img src="images/special_product_2.jpg" class="w-100" height="350px">
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
              <i class="fas fa-heart"></i>
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">gray shirt</p>
            <span class="fw-bold d-block">$ 45.50</span>
            <a href="#" class="btn btn-primary mt-3">Add to Cart <i class="fa-solid fa-cart-plus"></i></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <img src="images/special_product_3.jpg" class="w-100" height="350px">
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
              <i class="fas fa-heart"></i>
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">gray shirt</p>
            <span class="fw-bold d-block">$ 45.50</span>
            <a href="#" class="btn btn-primary mt-3">Add to Cart <i class="fa-solid fa-cart-plus"></i></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <img src="images/special_product_4.jpg" class="w-100" height="350px">
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
              <i class="fas fa-heart"></i>
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">gray shirt</p>
            <span class="fw-bold d-block">$ 45.50</span>
            <a href="#" class="btn btn-primary mt-3">Add to Cart <i class="fa-solid fa-cart-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of special Collection -->

  <!-- offers post -->
  <section id="offers" class="py-5">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
        <div class="offers-content">
          <span class="text-white">Discount Up To 40%</span>
          <h2 class="mt-2 mb-4 text-white">Grand Sale Offer!</h2>
          <a href="#" class="btn">Buy Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of offers post -->



  <!-- Deal Of The Week -->
  <section id="dow">
   <div class="container">
     <div class="row align-items-center">
       <div class="col-lg-6">
           <div class="dow-img">
             <img src="images/dow.png" alt="">
           </div>
       </div>
       <div class="col-lg-6  dow-col">
         <div class="dow-content d-flex flex-column align-items-center float-right">
           <div class="tit">
             <h2>Deal Of The Week</h2>

           </div>
           <ul class="timer">
             <li class="d-inline-flex flex-column justify-content-center align-items-center">
               <div id="day" class="timer_num">03</div>
               <div class="timer_unit">Day</div>
             </li>
             <li class="d-inline-flex flex-column justify-content-center align-items-center">
               <div id="hour" class="timer_num">12</div>
               <div class="timer_unit">hours</div>
             </li>
             <li class="d-inline-flex flex-column justify-content-center align-items-center">
               <div id="minute" class="timer_num">45</div>
               <div class="timer_unit">Mins</div>
             </li>
             <li class="d-inline-flex flex-column justify-content-center align-items-center">
               <div id="second" class="timer_num">03</div>
               <div class="timer_unit">Sec</div>
             </li>
           </ul>
           <div class="dow_btn">
          <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Shop now</a>
           </div>
         </div>
       </div>
     </div>

   </div>
  </section>
  <!-- end of about us -->

  <!-- popular -->
  <section id="popular" class="py-5">
    <div class="container">
      <div class="title text-center pt-3 pb-5">
        <h2 class="position-relative d-inline-block ms-4">THIS YEAR BEST PRODUCTS</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 row g-3">
          <h3 class="fs-5">Top Rated</h3>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/r1.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>

            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/r2.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/r3.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 row g-3">
          <h3 class="fs-5">Best Selling</h3>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/b1.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/b2.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/b3.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 row g-3">
          <h3 class="fs-5">On Sale</h3>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/s1.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/s2.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-start justify-content-start">
            <img src="images/s3.jpg" alt="" class="img-fluid pe-3 w-25" height="30px">
            <div>
              <p class="mb-0">Blue Shirt</p>
              <span>$ 20.00</span>
              <p>
                <a href="#" class="btn btn-primarybtn-xs"id="btn2-chg">Purchase</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of popular -->

  <!-- newsletter -->
  <section id="newsletter" class="py-5">
    <div class="container">
      <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="title text-center pt-3 pb-5">
          <h2 class="position-relative d-inline-block ms-4">Newsletter Subscription</h2>
        </div>

        <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus rem officia accusantium maiores quisquam dolorum?</p>
        <div class="input-group mb-3 mt-3">
          <input type="text" class="form-control" placeholder="Enter Your Email ...">
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </div>
      </div>
    </div>
  </section>
  <!-- end of newsletter -->

  <!-- footer -->
  <footer class="bg-dark py-5">
    <div class="container">
      <div class="row text-white g-4">
        <div class="col-md-6 col-lg-3">
          <a class="text-uppercase text-decoration-none brand text-white" href="index.html">Attire</a>
          <p class="text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit dolor ipsam?</p>
        </div>

        <div class="col-md-6 col-lg-3">
          <h5 class="fw-light">Links</h5>
          <ul class="list-unstyled">
            <li class="my-3">
              <a href="#" class="text-white text-decoration-none text-muted">
                <i class="fas fa-chevron-right me-1"></i> Home
              </a>
            </li>
            <li class="my-3">
              <a href="#" class="text-white text-decoration-none text-muted">
                <i class="fas fa-chevron-right me-1"></i> Collection
              </a>
            </li>
            <li class="my-3">
              <a href="#" class="text-white text-decoration-none text-muted">
                <i class="fas fa-chevron-right me-1"></i> News
              </a>
            </li>
            <li class="my-3">
              <a href="#" class="text-white text-decoration-none text-muted">
                <i class="fas fa-chevron-right me-1"></i> About Us
              </a>
            </li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <h5 class="fw-light mb-3">Contact Us</h5>
          <div class="d-flex justify-content-start align-items-start my-2 text-muted">
            <span class="me-3">
              <i class="fas fa-map-marked-alt"></i>
            </span>
            <span class="fw-light">
              VIT,Vellore Sir CV Raman Block,301.
            </span>
          </div>
          <div class="d-flex justify-content-start align-items-start my-2 text-muted">
            <span class="me-3">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="fw-light">
              ashwath1406@gmail.com
            </span>
          </div>
          <div class="d-flex justify-content-start align-items-start my-2 text-muted">
            <span class="me-3">
              <i class="fas fa-phone-alt"></i>
            </span>
            <span class="fw-light">
              8903705741
            </span>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <h5 class="fw-light mb-3">Follow Us</h5>
          <div>
            <ul class="list-unstyled d-flex">
              <li>
                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                  <i class="fab fa-pinterest"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end of footer -->
<!-- jquery -->
  <script src="js/jquery-3.6.0.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!-- bootstrap js -->
  <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- custom js -->
  <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
