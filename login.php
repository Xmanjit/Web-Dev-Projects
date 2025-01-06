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
.login{
  height: 40px;
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
   <?php
 include "connection.php";

if (isset($_POST['username'])) {
  $username = $_POST['username'];
}
if (isset($_POST['password'])) {
  $password = $_POST['password'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "Select * from crude2 where username='$username'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
        if($num == '0'){
          echo "<script>
          alert('User Not Registered With us, PLease create Account.');
          </script>";
        }else{
              foreach ($result as $data) {
                $mpassword = $data['password'];
                $id = $data['id'];

              }
              if($password == $mpassword){
                $_SESSION['id'] = $id;
                header("Location: http://localhost/student-mangement-system/profile.php");
            }else{
              echo "<script>
            alert('password is inncorrect. Please try again.');
        </script>";
            }
        }
}

?>
  <div class="col-lg-6 m-auto">
   

 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  LOGIN FORM </h1>
 </div><br>

    <label>Username</label>
    <input type="text" name="username" placeholder="Enter  Username" class="form-control"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder= "Enter  Password" class="form-control"><br>
    <input type="submit" class="login" value="Login">
    <h2>If you  does'nt have an  account then <a href="registration.php">SIGN UP</a></h2>
  </form>
</div>
</form>
</div>
</body>
</html>