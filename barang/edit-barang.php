<?php
include '../config.php';

if (!empty($_GET)) {
  $result = mysqli_query($con, "SELECT * FROM barang WHERE `id` = '" . $_GET['id'] . "';");
  $prev = mysqli_fetch_assoc($result);
} else {
  $prev = [];
}


if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  $id = $_POST['id'];

  $q = "UPDATE pw_akhdan_alex.barang SET `nama` = '$nama', `harga` = '$harga', `stok` = '$stok' WHERE `id` = '$id';";

  $res = mysqli_query($con, $q);
  if ($res) {
    echo '<script>window.alert("Data barang berhasil diedit")</script>';
  } else {
    echo '<script>window.alert("Data barang gagal diedit")</script>';
  }
  header('Location: barang.php');
}
?>
<!DOCTYPE html>
<html>

<?php include '../pegawai/meta-pegawai.php' ?>

<body>
  <?php include '../pegawai/nav-pegawai.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="add-content">
    <div class="row fullh add-barang">
      <div class="col">
        <div id="add-div">
          <form method="POST" action="">
            <label>ID Barang:</label>
            <input type="number" class="form-control add-c" name="id" value="<?php echo $prev['id'] ?>" readonly />

            <label>Nama Barang:</label>
            <input type="text" class="form-control add-c" name="nama" maxlength="80" value="<?php echo $prev['nama'] ?>"
              required />

            <label>Harga:</label>
            <input type="number" class="form-control add-c" name="harga" value="<?php echo $prev['harga'] ?>"
              required />

            <label>Stok:</label>
            <input type="number" class="form-control add-c" name="stok" value="<?php echo $prev['stok'] ?>" required />

            <button type="submit" class="btn btn-primary add-c" name="submit">Edit Barang</button>
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