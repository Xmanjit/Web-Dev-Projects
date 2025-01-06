<?php
include "connection.php";

// Fetch total users
$sql = "SELECT COUNT(*) as total_users FROM crude2";
$result = $conn->query($sql);
$total_users = $result->fetch_assoc()['total_users'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

    <!-- Dashboard Content -->
    <div class="container">
        <div class="row">
            <!-- Total Users Card -->
            <div class="col-md-4">
                <div class="card text-center bg-light shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text fs-2"><?php echo $total_users; ?></p>
                    </div>
                </div>
            </div>

            <!-- Add User Card -->
            <div class="col-md-4">
                <div class="card text-center bg-light shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Add User</h5>
                        <a href="registration.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>

            <!-- View Users Card -->
            <div class="col-md-4">
                <div class="card text-center bg-light shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">View Users</h5>
                        <a href="index.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User List Summary -->
        <div class="row mt-5">
            <h3 class="mb-3">Recent Users</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch recent users
                    $sql = "SELECT * FROM crude2 ORDER BY id ASC ";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['username']}</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
