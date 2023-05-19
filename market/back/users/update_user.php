<?php   
Include ("../config/cnx_db.php"); 
        $UserId= $_POST["uId"];
        $FirtsName = $_POST["f_name"];
        $LastName = $_POST["l_name"];
        $Email = $_POST["email"];
        $Pass = $_POST["password"];    
        $sql="UPDATE users SET First_name='$FirtsName', Last_name='$LastName', email='$Email',Password='$Pass' WHERE Id='$UserId'";
 $result= $conn->query($sql);
 if ($conn->query($sql)===TRUE) {
        echo "<script>alert('****User Updated****')</script>";
        header("refresh:0;url=http://127.0.0.1/5A/market/back/users/list_users.php");
    } 
  ?>
