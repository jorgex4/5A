<?php
//Developer: Jorge
// Database engine connection

//Credentials
$host= "localhost"; //127.0.0.1
$port= "3306";
$username= "root";
$password= "";

//name of Data Base 
$dbname = "market";

//MySQL connection
$conn = new mysqli($host,$username,$password,$dbname,$port);

//Check Connection
if ($conn -> connect_error) {
    die ("Connection Failed:".$conn->connect_error);
    } else {
         echo "Connection Succesfully"; 
    }
    ?>