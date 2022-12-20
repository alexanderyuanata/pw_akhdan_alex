<!DOCTYPE html>
<html>
<?php include './meta.php' ?>

<body>
  <?php include './nav.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="index-content">
    <div class="row fullh">
      <!--Login-->
      <div class="col-7 fullh" id="index-login-sec">
        <div id="login-box">

          <form id="login-form">
            <h1>Login</h1>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="email" class="form-control" id="log-email" name="log-email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="log-pw" name="log-pw" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <span id="index-noacc">Don't have an account? <a href="./register.html">Register here</a></span>

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

</html>