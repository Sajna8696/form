<?php 

$uname="root";
$pass="";
$host="localhost";
$dbname="task";

$conn=mysqli_connect($host,$uname,$pass,$dbname);
if($conn){
    // echo "connection successfully";
    
}else{
    echo "connection faild";
}

session_start();
?>