<?php   
Include ("../config/cnx_db.php"); 
$userId=$_GET['Id'];
$sql="SELECT * FROM users WHERE Id='$userId'";
$result= $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $FirtsName = $row["First_name"];
        $LastName = $row["Last_name"];
        $Email = $row["Email"];
        $Pass =$row["Password"];
        } 
 } ?>
 
 <!-- PARTE 2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <form name="EditUserForm" action="http://localhost/5A/market/back/users/update_user.php" method="post">
        <input  type="hidden" name="uId"value="<?php echo $userId;?>" disable="true"> <br>
        <label> Firstname:</label><br> <input  name="f_name" value="<?php echo $FirtsName;?>"required> <br>
        <label> Lastname:</label> <br> <input name="l_name" value="<?php echo $LastName;?>"required> <br>
        <label> E-mail:</label> <br> <input type="email" name="email" value="<?php echo $Email;?>" required> <br>
        <label> Password:</label> <br> <input type="password" name="password" value="<?php echo $Pass;?>" required> <br>
        <input type="submit" value="Actualizar Usuario"> <br> <br>
        <!-- <a href="sign_up.html"> Register </a> &nbsp; -->
        <!-- <a href=""> Forgot password?</a> -->
    </form>
</body>