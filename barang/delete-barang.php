<?php
include '../config.php';

if (!empty($_GET)) {
  $result = mysqli_query($con, "SELECT * FROM barang WHERE `id` = '" . $_GET['id'] . "';");
  $prev = mysqli_fetch_assoc($result);
} else {
  $prev = [];
}


if (!empty($_POST)) {
  $q = "DELETE FROM barang WHERE `id` = '" . $_POST['id'] . "';";
  $res = mysqli_query($con, $q);
}

if (!empty($_GET)) {
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
          <form id="delete-barangform">
            <label>ID Karyawan:</label>
            <input type="number" class="form-control add-c" id="delete-id" name="id"
              value="<?php echo $prev['id'] ?>" disabled />

            <label>Nama Barang:</label>
            <input type="text" class="form-control add-c" value="<?php echo $prev['nama'] ?>" disabled />

            <label>Harga:</label>
            <input type="number" class="form-control add-c" value="<?php echo $prev['harga'] ?>" disabled />

            <label>Stok:</label>
            <input type="number" class="form-control add-c" value="<?php echo $prev['stok'] ?>" disabled />
        

            <button type="submit" class="btn btn-primary add-c" name="submit">Hapus Data Barang</button>
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
<?php
} else {
?>

<!DOCTYPE html>
<html>

<?php include '../pegawai/meta-pegawai.php' ?>

<body>
  <?php include '../pegawai/nav-pegawai.php' ?>

  <!--Begin Contents-->
  SUDAH DIEDIT HEHE

  <!--End Contents-->

  <!--Footer-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
}
?>