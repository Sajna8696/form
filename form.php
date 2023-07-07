
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
    form{
        box-shadow: 2px 6px 100px black;9
    }
    #profile-pic{
        border-radius:100px;  
         height: 150px;
        width: 150px;
    }
    #profile-file{
      display: none;
    }
</style>
</head>
<body>
    <h2 class="text-light text-center bg-dark">Student Registration Form</h2>
        <section class="container my-2 bg-dark w-50 text-light p-2">
<form action="insert-form.php" method="post" enctype="multipart/form-data">      
        <center>
        <img src="https://cdn-icons-png.flaticon.com/512/4128/4128176.png" height="150px"  width="150px" id="profile-pic">
           <input type="file" id="profile-file" name="photo" >
           <script>
   var profile_pic=document.getElementById("profile-pic");
   var profile_file=document.getElementById("profile-file");

   profile_pic.addEventListener('click',()=>{

    profile_file.click()
   })

   profile_file.addEventListener("change",(event)=>{
    profile_pic.src= URL.createObjectURL(event.target.files[0]);
   })

</script>             
      
        <h5><br>
            <div class="mb-3 col-md-8">
          <label  class="form-label">Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username">
          
        </div>
        <div class="col-md-8">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" name="pass" class="form-control" id="password" placeholder="Enter your password" aria-label="Password" aria-describedby="password-toggle">
              <button class="btn btn-outline-light" type="button" id="password-toggle" onclick="togglePasswordVisibility()">
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
  </div><br>
  <div class="col-md-8">
            <label for="password" class="form-label">Confirm Password</label>
            <div class="input-group">
              <input type="password" name="confirm" class="form-control" id="password1" placeholder="confirm your password" aria-label="Password" aria-describedby="password2-toggle">
              <button class="btn btn-outline-light" type="button" id="password-toggle" onclick="box()">
                <i class="bi bi-eye-slash"></i>
      
              </button>
            </div>
          </div> 
          <script>
    function box() {
      const passwordInput = document.getElementById("password1");
      const passwordToggle = document.getElementById("password2-toggle");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
      } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
      }
    }
  </script>
  </div>
  <br>
        <div class="mb-3 col-md-8">
             <label class="form-label">Sname</label>
             <input type="text" class="form-control" placeholder="Enter your name" name="sname">
             </div>
         <div class="mb-3 col-md-8">
              <label class="form-label">Address</label>
              <input type="text" class="form-control" placeholder="text your address"name="address">
          </div>
          <div class="mb-3 col-md-8">
            <label class="form-label">Age</label>
            <input type="text" class="form-control" placeholder="Enter your age"name="age">
        </div>
        <div class="mb-3 col-md-8">
            <label class="form-label">Birth Date</label>
            <input type="date" class="form-control" name="bdate">
        </div>
        <div class="mb-3 col-md-8">
            <label class="form-label">City</label>
            <select class="form-select text-center" name="city" aria-label="Default select example">
                <option  value="Surat">Surat</option>
                <option value="Ahemdabad">Ahemdabad</option>
                <option value="Vadodra">Vadodra</option>
                <option value="Other">Other</option>
              </select>
        </div>
        <div class="mb-3 col-md-8">
           <label class="form-label text-decoration-underline">Color</label>
            <input type="color" name="color" class="form-control">
        </div>
    </h5>
        <h3>
        <div>
            <label for="inputZip" class="form-label text-decoration-underline" >Gender</label><br>
                
            <input name="gender" type="radio"  value="male" >Male 
            <input name="gender" type="radio" value="female">Female
            <input name="gender" type="radio"  value="other">Other
          </div><br>
        <div>
            <label for="inputZip" class="form-label text-decoration-underline">Favorite Language</label><br>
            <input name="lang[]" value="gujrati" type="checkbox">Gujrati
            <input name="lang[]" value="hindi" type="checkbox">Hindi
            <input name="lang[]" value="english" type="checkbox">English
            <input name="lang[]" value="opther" type="checkbox">Other
        
          </div>
      
        <br>
        <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
        <button type="reset" class="btn btn-outline-danger">Reset</button>
    
</h3>
<!-- <a href="login.php">Do You Have Login? Click Here</a> -->
</center>
      </form>
    </section>
</body>
</html>