<?php require_once "./connection.php";
if(!isset($_SESSION['sname'])){
    header("location:login.php");

}
echo"welcome".$_SESSION['sname'];
?>
<form action="logout.php">
    <br><br>
    <button type="submit">Logout</button> 
</form>