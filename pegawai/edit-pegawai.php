<?php
include '../config.php';

if (!empty($_GET)) {
  $result = mysqli_query($con, "SELECT * FROM pegawai WHERE `id_pegawai` = '" . $_GET['id'] . "';");
  $prev = mysqli_fetch_assoc($result);
} else {
  $prev = [];
}


if (!empty($_POST)) {
  $q = "UPDATE pegawai SET `nama` = '" . $_POST['nama'] . "', `jenis_kelamin` = '" . $_POST['jk'] .
    "', `tgl_lahir` = '" . $_POST['bd'] . "', `gaji` = '" . $_POST['gaji'] . "', `departemen` = '" .
    $_POST['dep'] . "', `jabatan` = '" . $_POST['jab'] . "' WHERE `id_pegawai` = '" . $_POST['id'] . "';";

  $res = mysqli_query($con, $q);

}

if (!empty($_GET)) {
?>
<!DOCTYPE html>
<html>

<?php include 'meta-pegawai.php' ?>

<body>
  <?php include 'nav-pegawai.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="add-content">
    <div class="row fullh add-pegawai">
      <div class="col">
        <div id="add-div">
          <form id="edit-pegawaiform">
            <label>ID Karyawan:</label>
            <input type="number" class="form-control add-c" id="edit-id" name="id"
              value="<?php echo $prev['id_pegawai'] ?>" disabled />

            <label>Nama Karyawan:</label>
            <input type="text" class="form-control add-c" id="edit-name" name="nama" maxlength="80"
              value="<?php echo $prev['nama'] ?>" required />

            <label>Jenis Kelamin:</label>
            <select class="form-select add-c" id="edit-jk" name="jk">
              <option <?php if ($prev['jenis_kelamin'] == 'P')
    echo 'selected ' ?>value="P">Pria</option>
              <option <?php if ($prev['jenis_kelamin'] == 'W')
    echo 'selected ' ?>value="W">Wanita</option>
            </select>

            <label>Tanggal Lahir:</label>
            <input type="date" class="form-control add-c" id="edit-bd" name="bd"
              value="<?php echo $prev['tgl_lahir'] ?>" required />

            <label>Gaji:</label>
            <input type="number" class="form-control add-c" id="edit-gaji" name="gaji"
              value="<?php echo $prev['gaji'] ?>" required />

            <label>Departemen:</label>
            <select class="form-select add-c" form="add-form" id="edit-dep" name="dep">
              <option <?php
  if ($prev['departemen'] == 'Akuntansi')
    echo 'selected ' ?> value="Akuntansi">Akuntansi
              </option>
              <option <?php
  if ($prev['departemen'] == 'Logistik')
    echo 'selected ' ?> value="Logistik">Logistik</option>
              <option <?php
  if ($prev['departemen'] == 'Humas')
    echo 'selected ' ?> value="Humas">Humas</option>
              <option <?php
  if ($prev['departemen'] == 'Desain')
    echo 'selected ' ?> value="Desain">Desain</option>
              <option <?php
  if ($prev['departemen'] == 'Teknologi')
    echo 'selected ' ?> value="Teknologi">Teknologi
              </option>
              <option <?php
  if ($prev['departemen'] == 'Manajemen')
    echo 'selected ' ?> value="Manajemen">Manajemen
              </option>
            </select>

            <label>Jabatan:</label>
            <select class="form-select add-c" form="add-form" id="edit-jab" name="jab">
              <option <?php
  if ($prev['jabatan'] == 'Pegawai')
    echo 'selected ' ?> value="Pegawai">Pegawai</option>
              <option <?php
  if ($prev['jabatan'] == 'Manajer')
    echo 'selected ' ?> value="Manajer">Manajer</option>
            </select>

            <button type="submit" class="btn btn-primary add-c" name="submit">Edit Pegawai</button>
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

<?php include 'meta-pegawai.php' ?>

<body>
  <?php include 'nav-pegawai.php' ?>

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