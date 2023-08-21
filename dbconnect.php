<?php 

global $con;
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"beauty_salon");
if(!$con){
echo "connection failed";
}


?>