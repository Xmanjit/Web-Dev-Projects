<?php
    include "connection.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
         $username = $_POST['username'];
         $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
         if($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql = "Select * from crude2 where username='$username'"; 
        $result = $conn->query($sql);
        $num = mysqli_num_rows($result);
        if($num == '0'){
          if(($password == $cpassword)) {
            $hash = password_hash($password,PASSWORD_DEFAULT); 
            $insert = "INSERT INTO crude2 (username,password,name,email,phone) VALUES ('".$username."','".$password."', '".$name."','".$email."' ,'".$phone."')"; 
    
            $iresult = $conn->query($insert);
            if ($iresult) { 
                $showAlert = true;  
            }

          }else {
          
           echo "<script>alert('Passwords do not match');</script>";

          }
        }else{
           echo "<script>
           alert('User is Already registered. please try New Username.');
           </script>";
        }
  }else{

      echo "<script>
      alert('Registration successful!');
      </script>";
  }
}
      ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student-mangement-system</title>
  </head>
  <style type="text/css">
   /* .back-img {
 background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVjjFspcn1Sb4K6PF_-APzOQvSqBBbg0s82g&s");
 background-repeat: no-repeat;
    }
*/    form {
    width: 82%;
    padding: 38px;
}

.card {
    padding: 14px;
}

input.login {
    margin-top: 20px;
    background-color: #0d6efd;
    border: navajowhite;
    color: white;
}

img {
    width: 81px;
    margin-left: 60px;
}

ul.navbar-nav {}

ul.navbar-nav {
    /* justify-content: center; */
    display: flex;
    margin: 0 auto;
    font-size: 19px;
    pd: 14px 12px;
}
      
li.nav-item {}

li.nav-item {
    padding: 2px 33px;
}

h2 {
    font-size: 17px;
    margin-top: 14px;
}

  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">student-management-system</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php" style="color:white;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="registration.php" style="color: white;">ABOUT US</a>
            </li>
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"style="color: white;">DETAIL VIEW</a>
            </li>
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="update.php" style="color: white;">UPDATE</a>
            </li>
          </ul>
 
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" class="form-control"> <br>

    <label>Enter Your Username</label>
    <input type="text"  name="username" placeholder="Enter Your Username/Email/Phone"class="form-control"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter Password" class="form-control"><br>

    <label>Confirm Password</label>
    <input type="password" name="cpassword" placeholder="Confirm Password"class="form-control" ><br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </a></button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="profile.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>


