<?php
//Login-Sing in
include("../config/cnx_db.php");
$Email = $_POST["email"];
$Pass = ($_POST["password"]);
$sql="SELECT * FROM users WHERE Email='$Email' AND Password='$Pass'"; ///SELECT* FROM users WHERE Email='jorge@gmail.com' AND Password='123456';

$result=$conn->query($sql);
if ($result->num_rows > 0) {
    //echo "User has been Found succesfully. You're login";
    header("Location:http://127.0.0.1/5A/market/front/home.html");
  } else {// echo"Error: ".$conn->error."<br>".$sql;
    echo "<script>alert('****User doesnt exist****')</script>";
    header("refresh:0;url=http://127.0.0.1/5A/market/front/login.html");
 }
?>