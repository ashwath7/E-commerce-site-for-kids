<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register form</title>

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

    <div class="container" id="sign-page" role="tabpanel" aria-labelledby="tab-register">
      <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
   <li class="nav-item" role="presentation">
     <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="login.php" role="tab"
       aria-controls="pills-login" aria-selected="false">Login</a>
   </li>
   <li class="nav-item" role="presentation">
     <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
       aria-controls="pills-register" aria-selected="true">Register</a>
   </li>
 </ul>
       <form>
         <div class="text-center mb-3">
           <p>Sign up with:</p>
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

         <!-- Name input -->
         <div class="form-outline mb-4">
           <input type="text" id="registerName" class="form-control" />
           <label class="form-label" for="registerName">Name</label>
         </div>

         <!-- Username input -->
         <div class="form-outline mb-4">
           <input type="text" id="registerUsername" class="form-control" />
           <label class="form-label" for="registerUsername">Username</label>
         </div>

         <!-- Email input -->
         <div class="form-outline mb-4">
           <input type="email" id="registerEmail" class="form-control" />
           <label class="form-label" for="registerEmail">Email</label>
         </div>

         <!-- Password input -->
         <div class="form-outline mb-4">
           <input type="password" id="registerPassword" class="form-control" />
           <label class="form-label" for="registerPassword">Password</label>
         </div>

         <!-- Repeat Password input -->
         <div class="form-outline mb-4">
           <input type="password" id="registerRepeatPassword" class="form-control" />
           <label class="form-label" for="registerRepeatPassword">Repeat password</label>
         </div>

         <!-- Checkbox -->
         <div class="form-check d-flex justify-content-center mb-4">
           <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
             aria-describedby="registerCheckHelpText" />
           <label class="form-check-label" for="registerCheck">
             I have read and agree to the terms
           </label>
         </div>

         <!-- Submit button -->
         <div class="d-grid gap-2">
     <button class="btn btn-primary" type="button">Sign in</button>
   </div>
       </form>
     </div>
   </div>

   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>
