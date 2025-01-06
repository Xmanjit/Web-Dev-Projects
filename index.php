<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student-mangement-system</title>
  
  <style>
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
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
       
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from crude2";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        
        <td>
                  <a class='btn btn-success' href='update.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>