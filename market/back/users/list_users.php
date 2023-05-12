<?php   Include ("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios </title>
</head>
<body>
  <table border="1" align="center">
<tr><th>  First_name</th><th> Last_name </th><th> Email </th><th> Accion </th></tr>
<?php $sql="SELECT * FROM users";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row['First_name']."</td> 
                   <td>" .$row['Last_name']." </td>
                   <td>" .$row['Email']."</td>
                   <td> <a href='edit_user.php? Id=".$row['Id']."'>
                   <img src='../../front/icons/update.png' width='15'> </a> &nbsp
                   <a href='delete_user.php? Id=".$row['Id']."'>
                   <img src='../../front/icons/delete.png' width='15'> </a> </td>
                   </tr>";
                 }
    }else { 
        echo "No data";
 } ?>
    
  </table>  
</body>
</html>