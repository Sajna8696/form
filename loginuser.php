<?php require_once "./connection.php";

if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $query="SELECT * FROM `student` WHERE `username`='$uname' AND `pass`='$pass'";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        $_SESSION['username']=$data['username'];
        $_SESSION['sname']=$data['sname'];
        ?>
        <script>
            alert("login success");
            window.location.href="dashbord.php";
        </script>
        <?php
    }else{
        alert("login faild"); 
    }
}
?>