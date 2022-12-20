<?php
include '../config.php';

$q = mysqli_query($con, "SELECT * FROM barang ORDER BY `id` ASC");
?>

<!DOCTYPE html>
<html>

<?php include '../pegawai/meta-pegawai.php' ?>

<body>
  <?php include '../pegawai/nav-pegawai.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="pegawai-content">
    <div class="row fullh">
      <div class="col">
        <div id="tabel-pegawai">
          <table class="table" id="student-table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col" colspan="2" class="text-center">Options</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($q->num_rows <= 0) {
              ?>
              <td scope="col" colspan="9" class="text-center"><span id="exc">Tidak ada Data Barang..</span></td>
              <?php
              } else {
                while ($list = mysqli_fetch_assoc($q)) {
              ?>
              <tr>
                <td scope="col">
                  <?php echo $list['id'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['nama'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['harga'] ?>
                </td>
                <td scope="col">
                  <?php echo $list['stok'] ?>
                </td>
                <td scope="col" class="text-center">
                  <a href="./edit-barang.php?id=<?php echo $list['id'] ?>">Edit</a>
                </td>
                <td scope="col" class="text-center">
                  <a href="./delete-barang.php?id=<?php echo $list['id'] ?>">Delete</a>
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