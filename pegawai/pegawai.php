<?php
include '../config.php';

$q = mysqli_query($con, "SELECT * FROM pegawai ORDER BY `id_pegawai` ASC");
?>

<!DOCTYPE html>
<html>

<?php include 'meta-pegawai.php' ?>

<body>
  <?php include './nav-pegawai.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="pegawai-content">
    <div class="row fullh add-pegawai">
      <div class="col">
        <div id="tabel-pegawai">
          <table class="table" id="student-table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Umur</th>
                <th scope="col">Departemen</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Gaji</th>
                <th scope="col" colspan="2" class="text-center">Options</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($q->num_rows <= 0) {
              ?>
              <td scope="col" colspan="9" class="text-center"><span id="exc">Tidak ada Data Pegawai..</span></td>
              <?php
              } else {
                while ($list = mysqli_fetch_assoc($q)) {
              ?>
              <tr>
                <td scope="col">
                  <?php echo $list['id_pegawai'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['nama'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['jenis_kelamin'] ?>
                </td>
                <td scope="col">
                  <?php echo date('Y') - current(mysqli_fetch_array(mysqli_query($con, "SELECT YEAR(tgl_lahir) FROM pegawai WHERE id_pegawai ='" . $list['id_pegawai'] . "'"))) ?>
                </td>
                <td scope="col">
                  <?php echo $list['departemen'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['jabatan'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['gaji'] ?>
                </td>
                <td scope="col" class="text-center">
                  <a href="./edit-pegawai.php?id=<?php echo $list['id_pegawai'] ?>">Edit</a>
                </td>
                <td scope="col" class="text-center">
                  <a href="./delete-pegawai.php?id=<?php echo $list['id_pegawai'] ?>">Delete</a>
                </td>
              </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
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