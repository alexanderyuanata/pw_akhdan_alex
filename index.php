<?php 

include 'php/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: php/index.php");
}

if (isset($_POST['submit'])) {
 $username = $_POST['log_user'];
 $password = md5($_POST['log_pass']);

 $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
 $result = mysqli_query($con, $sql);
 if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['username'] = $row['username'];
  header("Location: php/index.php");
 } else {
  echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
 }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/global.css">
  <script src="./js/jquery-3.6.1.js"></script>
  <script src="./js/index.js"></script>

  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="./home.html">
        <img src="./img/logo.png" width="30" height="30">
      </a>

      <div class="collapse navbar-collapse" id="navbar">
        <!--Links for Webpages-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pencarian</a>
          </li>
          <!--Dropdown-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manajemen
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Karyawan</a></li>
              <li><a class="dropdown-item" href="#">Jabatan</a></li>
              <li><a class="dropdown-item" href="#">Departemen</a></li>
              <li><a class="dropdown-item" href="#">Cabang</a></li>
            </ul>
          </li>
        </ul>

        <!--Links for Login & Registration-->
        <ul class="navbar-nav" id="nav-login">
          <li class="nav-item">
            <a class="nav-link" href="#">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./register.php">Register</a>
          </li>
        </ul>

      </div>

    </div>
  </nav>

  <!--Begin Contents-->
  <div class="container-fluid" id="index-content">
    <div class="row fullh">
      <!--Login-->
      <div class="col-7 fullh" id="index-login-sec">
        <div id="login-box">

          <form action="" method="POST" id="login-form">
            <h1>Login</h1>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" required name="log_user" id="log_user" placeholder="username" value="<?php echo $log_uaer; ?>">
              <label for="floatingUsername">username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" required name="log_pass" id="log_pass" placeholder="Password" value="<?php echo $log_pass; ?>">
              <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <span id="index-noacc">Don't have an account? <a href="./register.php">Register here</a></span>

          </form>

        </div>
      </div>
      <!--Blurb Text-->
      <div class="col-5 fullh" id="index-blurb">
        <p>Welcome to</p>
        <h2>Sistem Manajemen Karyawan</h2>
      </div>
    </div>
  </div>


  <!--End Contents-->

  <!--Footer-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</body>

</html>