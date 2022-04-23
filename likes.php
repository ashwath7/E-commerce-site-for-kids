<?php
$servename = "localhost";
$username = "root";
$password ="";
$db = "login_details";

$con = mysqli_connect($servename, $username, $password,$db );

$sql = "SELECT p_name FROM likes";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res)){
  while($result=mysqli_fetch_array($res)){
    ?>
    <h2><?php echo "This product has been liked by".$result[0]." people"?></h2>

    <?php
  }

}

?>
