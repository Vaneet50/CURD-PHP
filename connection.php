<?php
$servername="localhost";
$username="root";
$password="";
$db="responsiveform3";
$con=mysqli_connect($servername,$username,$password,$db);
if($con){
    echo "ok";
}
else{
    echo "no".mysqli_connect_error();
}
?>