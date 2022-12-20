<?php
include '../config.php';
echo "<script>console.log('IN')</script>";

if (!empty($_POST) && isset($_POST['submit'])) {
  $q = "INSERT INTO barang(nama, harga, stok) VALUES('"
    . $_POST['nama'] . "', '" . $_POST['harga'] . "', '" . $_POST['stok'] ."');";
  $res = mysqli_query($con, $q);
  echo "<script>console.log('" . $res . "')</script>";

  if ($res) {
    echo "<script>alert('barang berhasil ditambah!')</script>";
    header("Location: barang.php");
  } else {
    echo "<script>alert('barang gagal ditambah!')</script>";
  }

}


?>

<!DOCTYPE html>
<html>

<?php include '../pegawai/meta-pegawai.php' ?>

<body>
  <?php include '../pegawai/nav-pegawai.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="add-content">
    <div class="row fullh">
      <div class="col">
        <div id="add-div">
          <form method="POST">
            <label>Nama Barang:</label>
            <input type="text" class="form-control add-c" id="in-name" name="nama" maxlength="80" required />

            <label>Harga:</label>
            <input type="number" class="form-control add-c" id="in-harga" name="harga" required />

            <label>Stok:</label>
            <input type="number" class="form-control add-c" id="in-stok" name="stok" required />

            <button type="submit" class="btn btn-primary add-c" name="submit">Tambah Barang</button>
          </form>
        </div>
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