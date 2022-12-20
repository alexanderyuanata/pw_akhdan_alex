<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: pegawai/pegawai.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['log_user'];
  $password = md5($_POST['log_pass']);

  $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
  $result = mysqli_query($con, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: pegawai/pegawai.php");
  } else {
    echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="index-content">
    <div class="row fullh">
      <!--Login-->
      <div class="col-7 fullh" id="index-login-sec">
        <div id="login-box">

          <form action="" method="POST" id="login-form">
            <h1>Login</h1>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" required name="log_user" id="log_user" placeholder="username"
                value="<?php echo $log_uaer; ?>">
              <label for="floatingUsername">username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" required name="log_pass" id="log_pass" placeholder="Password"
                value="<?php echo $log_pass; ?>">
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