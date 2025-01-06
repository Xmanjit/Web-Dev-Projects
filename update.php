<?php
  include "connection.php";
  $id="";
  $name="";
  $email="";
  $phone="";
 $username="";
 $password="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:student-mangement-system/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from crude2 where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:student-mangement-system/index.php");
      exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["phone"];
     $username=$row["username"];
       $password=$row["password"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
     $username=$_POST["username"];
     $password=$_POST["password"];

    $sql = "update crude2 set name='$name', email='$email', phone='$phone', username='$username' , password='$password' where id='$id'";
    $result = $conn->query($sql);

    if ($result) {
        // Display success alert
        echo "<script>
            alert('Data updated successfully!');
            window.location.href = 'index.php';
        </script>";
    } else {
        // Display error alert
        echo "<script>
            alert('Error updating data. Please try again.');
        </script>";
    }
}
   
    
  
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>student-mangement-system</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    padding: 2px  33px;
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
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"> <br>

  <label> USERNAME: </label>
 <input type="text" name="username" value="<?php echo $username; ?>" class="form-control"> <br>
  <label> PASSWORD: </label>
 <input type="text" name="password" value="<?php echo $password; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>