
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search page</title>
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
    <link rel="stylesheet" href="css/product.css">
  <!-- ICONS -->
  <script src="https://kit.fontawesome.com/d47a70c7a4.js" crossorigin="anonymous"></script>
</head>

<body>


  <?php


    $servename = "localhost";
    $username = "root";
    $password ="";
    $db = "login_details";

    $con = mysqli_connect($servename, $username, $password,$db );
    $sql = "SELECT email FROM login_info ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($con, $sql);
    if($res1 = mysqli_fetch_array($res)){
      echo '<div class="alert  alert-success fade show dis" role="alert"><strong>' .$res1[0].'</strong> You loged in sucessfully!</div>';


    }
    function search_product() {
      global $con;
      if(isset($_GET['search_data_product'])){
        $search_data_value= $_GET['search_data'];
        $search_query = "SELECT * FROM  search_details WHERE p_name LIKE '%$search_data_value' ";
        $result = mysqli_query($con, $search_query);
        while($row = mysqli_fetch_assoc($result)){
          $product_name = $row["p_name"];
          echo "  <div class='col-md-6 col-lg-4 col-xl-3 p-2 feat'>
              <div class='collection-img position-relative'>
                <img src='images/c_shirt-girl.png' class='w-100'>
                <span class='position-absolute bg-primary text-white d-flex align-items-center justify-content-center'>sale</span>
              </div>
              <div class='text-center'>
                <div class='rating mt-3'>
                  <span class='text-primary'><i class='fas fa-star'></i></span>
                  <span class='text-primary'><i class='fas fa-star'></i></span>
                  <span class='text-primary'><i class='fas fa-star'></i></span>
                  <span class='text-primary'><i class='fas fa-star'></i></span>
                  <span class='text-primary'><i class='fas fa-star'></i></span>
                </div>
                <p class='text-capitalize my-1'>$product_name</p>
                <a href='buy.php' class='btn btn-primary' id='btn1'>
                  Buy now <i class='fa-solid fa-basket-shopping'></i>
                </a>
              </div>
            </div>";
        }
      }

    }

  ?>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >

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
      <form class="d-flex" action="search.php" method="get">
        <input class="form-control me-2 round" type="search" placeholder="search" aria-label="Search" name="search_data">
        <input type="submit" name="search_data_product" value="Search" class="btn btn-primary button-clr "id="color-red">

      </form>
    </div>

  </nav>
  <section id="col" class="py-5 ">
    <div class="container">
      <!-- <div class="title text-center">
        <h2 class="position-relative d-inline-block change-clr">NEW COLLECTIONS</h2>
      </div> -->
      <?php

         search_product();
      ?>

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
              <p class="text-capitalize my-1">Blue shirt</p>
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
              <p class="text-capitalize my-1">T-shirt</p>
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
              <p class="text-capitalize my-1">Green shirt</p>
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
              <p class="text-capitalize my-1">Blue shirt</p>
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
                ashwath1406@gmail.co
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
  <!-- bootstrap js -->
  <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- custom js -->
  <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>
