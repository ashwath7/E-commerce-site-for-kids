<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

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
    <link rel="stylesheet" href="css/register.css">
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/d47a70c7a4.js" crossorigin="anonymous"></script>
  </head>
  </head>
  <body>
    <?php
       if($_SERVER['REQUEST_METHOD']=='POST'){
         $email = $_POST['email'];
         $pass= $_POST['pass'];

         $servename = "localhost";
         $username = "root";
         $password ="";
         $db = "login_details";

         $con = mysqli_connect($servename, $username, $password,$db );
         if(! $con){
           die("sooryy failed to connect");
         }else {


           $sql = "INSERT INTO `login_info` ( `email`, `pass`,`date`) VALUES ( '$email', '$pass',current_timestamp())";
           $res = mysqli_query($con,$sql);

           if($res){
             echo "Inserted";
           }else{
             echo "not inserted".mysqli_error($con);
           }
         }
      }

      ?>

   <div class="container" id="sign-page">
     <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
      aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="register.php" role="tab"
      aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="/siteBaby/login.php" method="post">
      <div class="text-center mb-3">
        <p>Sign in with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>
        <p class="text-center">or:</p>
      <div class="form-outline mb-4">
        <label class="form-label" for="email">Email or username</label>
        <input type="email" id="email" class="form-control" name="email">
      </div>
      <div class="form-outline mb-4">
        <label class="form-label" for="pass">Password</label>
        <input type="password" id="pass" class="form-control" name="pass">
      </div>
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="form-check mb-3 mb-md-0">
            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <a href="#!">Forgot password?</a>
        </div>
      </div>
      <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Login</button>

      <div class="text-center">
       <p>Not a member? <a href="register.php">Register</a></p>
     </div>
</div>
</form>
  </div>
</div>
<div class="d-grid gap-2">
  <a href='product.php' class='btn btn-primary' id='btn1'>
    Click here after Login
  </a>
   </div>

   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

  </body>
</html>
