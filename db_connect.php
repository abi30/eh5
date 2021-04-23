<?php 
 $hostname="localhost";
 $username="root";
 $password="";
 $db="images";

 $con=mysqli_connect($hostname,$username,$password,$db);

 if ($con->connect_error){
     die("Connection faild: ".$con->connect_error);
 }else{
     echo "successfully Connected";
 }


?>