<?php
    Include ("../config/cnx_db.php");
$userId= $_GET['Id'];
$sql="DELETE FROM users WHERE Id='$userId'";
if($conn->query($sql)==TRUE){
    if ($conn->affected_rows>0) {
        echo "<script>alert('****User has been deleted****')</script>";
        header("refresh:0;url=http://127.0.0.1/5A/market/back/users/list_users.php");
    } else {  
        echo"Error:User hasn't been deleted" ;
        echo"Error:" . $conn->error;
           
    }  
} else {
    echo "<script>alert('****User doesn't exist****')</script>";
    header("refresh:0;url=http://127.0.0.1/5A/market/back/users/list_users.php");
}
?>
