<?php
    Include ("../config/cnx_db.php");
        $FirtsName = $_POST["f_name"];
        $LastName = $_POST["l_name"];
        $Email = $_POST["email"];
        $Pass =($_POST["password"]);  //$Pass =md5($_POST["password"]) ;
        $sql = "INSERT INTO users (First_name, Last_name, Email, Password) VALUES ('$FirtsName', '$LastName', '$Email', '$Pass')";
 //$conn->query($sql);
 if ($conn->query($sql)===TRUE) {
   //echo "User has been Created Succesfully"; 
   //header("Location:http://127.0.0.1/5A/market/front/login.html");
   echo "<script>alert('****User has been created****')</script>";
   header("refresh:0;url=http://127.0.0.1/5A/market/front/login.html");
 } else {
        //echo"Error: ".$conn->error."<br>".$sql;
        echo "<script>alert('****Email already exist****')</script>";
        header("refresh:0;url=http://127.0.0.1/5A/market/front/create_user.html");
  }
?>