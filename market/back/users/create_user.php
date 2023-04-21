<?php
    Include ("../config/cnx_db.php");
        $FirtsName = $_POST["f_name"];
        $LastName = $_POST["l_name"];
        $Email = $_POST["email"];
        $Pass = $_POST["password"];
        $sql = "INSERT INTO users (First_name, Last_name, Email, Password) VALUES ('$FirtsName', '$LastName', '$Email', '$Pass')";
 //$conn->query($sql);
 if ($conn->query($sql)===TRUE) {
   echo "User has been Created Succesfully";
 } else {
        echo"Error: ".$conn->error."<br>".$sql;
}
?>

