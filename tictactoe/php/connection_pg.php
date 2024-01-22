<?php
$username = "root";
$password= "";
$server = 'localhost';
$db = 'tictac';
$port= 3306;


$conn = mysqli_connect($server, $username, $password, $db, $port);

if($conn){
   // echo "Connection Successfull";
}
else{
    echo  "not connected";
}
?>