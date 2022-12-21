<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
  // session isn't started
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="home-content">
    <div class="row" id="manage-pegawai">
      <img src='./img/management-white-shadow.png'>
      <span id="manage-blurb">
        <h3>SATU HUB, SEMUA PENGATURAN</h3>
        <p>
          Selamat datang di Sistem Informasi Karyawan Atma, sebuah
          hub untuk segala pengaturan data dalam perusahaan. Anda telah
          login sebagai <span><?php echo $_SESSION['username'] ?></span> dengan
          hak <span>administrator</span>.<br>
          Mulai mengatur database dengan link-link berikut:
        </p>
        <a href="./pegawai/pegawai.php"><button>Data Karyawan</button></a>
        <a href="./barang/barang.php"><button>Data Barang</button></a>
      </span>
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