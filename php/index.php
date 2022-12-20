<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/global.css">
  <script src="../js/jquery-3.6.1.js"></script>
  <script src="../js/index.js"></script>

  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="./home.html">
        <img src="../img/logo.png" width="30" height="30">
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
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">logout</a>
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
            <h1>berhasil login yaeyy!!</h1>
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