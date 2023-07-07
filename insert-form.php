<?php require_once "./connection.php";

if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $confirm=$_POST['confirm'];
    $sanme=$_POST['sname'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $bdate=$_POST['bdate'];
    $city=$_POST['city'];
    $color=$_POST['color'];
    $gender=$_POST['gender'];
    $lang=$_POST['lang'];
    $lang1= "";
    foreach($lang as $row){
        $lang1 .=$row .",";
    }
    if($pass==$confirm){    
        if($photo=$_FILES['photo']){
            $name=time().$_FILES['photo']['name'];
            $tmp_name=$_FILES['photo']['tmp_name'];
            $uplod=move_uploaded_file( $tmp_name,"./uplode".$name);
            if($uplod){ 
            $query="INSERT INTO `student`(`photo`,`username`,`pass`,`confirm`,`sname`,`address`,`age`,`bdate`,`city`,`color`,`gender`,`lang`)
            VALUES('$name','$uname','$pass','$confirm','$sanme','$address','$age','$bdate','$city','$color','$gender','$lang1')";
            $result=mysqli_query($conn,$query);
            if($result){
                ?>
                <script>
                    alert("insert success");
                    window.location.href="login.php";
                </script>
                <?php
            } else{
                echo "insert faild";
            }
}
} 
    }else{
        ?>
        <script>
            alert("password does not match");
            // window.location.href="form.php";
            
        </script>
        <?php
    }
}

?>