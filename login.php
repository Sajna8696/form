<?php require_once "./connection.php"; 

if(isset($_SESSION['sname'])){
    header("location:dashbord.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    form{
        box-shadow: 2px 6px 100px black;
        background-color:black;
        
        
    }
    #profile-file{
      display: none;
    }
#profile-pic{
  border-radius:100px;  
  height: 150px;
  width: 150px;
  
}
body{
    margin-top: 100px;
}
</style>   

</head>
<body>
    <div class="container-fluid bg-dark text-light">
        
    </div>
    <center>
      
        <h5>
    <section class="container my-2  w-50 text-light p-2">
        <form   class="row g-3 p-3 col-md-10"  action="loginuser.php"method="post" >

            <center>
   <img src="https://cdn1.vectorstock.com/i/1000x1000/16/60/login-sign-icon-sign-in-symbol-lock-vector-10871660.jpg" height="150px"  width="150px" id="profile-pic">
           <input type="file" id="profile-file" name="photo" >
           
              <div class="col-md-8">
                <label for="validationCustom01" class="form-label" name="username">Username</label>
                
                <input name="username" type="text"required="required" class="form-control" placeholder="Enter Your Name" id="validationCustom01"  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </center>
              <div class="col-md-8">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                                <div class="input-group has-validation">
                                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
            </div>
            <center> 
            <div class="col-md-8">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" name="pass" id="password" placeholder="Enter your password" aria-label="Password" aria-describedby="password-toggle">
              <button class="btn btn-outline-secondary" type="button" id="password-toggle" onclick="togglePasswordVisibility()">
                <i class="bi bi-eye-slash"></i>
      
              </button>
            </div>
          </div>
          <script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById("password");
      const passwordToggle = document.getElementById("password-toggle");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
      } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
      }
    }
  </script>
  </center>
  
<center>
              <div>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div></center>
            
            <div class="col-12">
              <button type="submit" class="btn btn-outline-light " name="submit">login</button>

            </div>

        <a href="form.php">New Registation</a>
          </form>

    </section>
</h5>
<script>

</script>

</body>
</html>