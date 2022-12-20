<!DOCTYPE html>
<html>
<?php include './meta.php' ?>

<body>
  <?php include './nav.php' ?>

  <!--Begin Contents-->
  <div class="container-fluid" id="add-content">
    <div class="row fullh">
      <div class="col">
        <div id="add-div">
          <form id="add-form">
            <label>Nama Karyawan:</label>
            <input type="text" class="form-control add-c" id="in-name" name="nama" maxlength="80" required />

            <label>Jenis Kelamin:</label>
            <select class="form-select add-c" form="add-form" name="jk">
              <option value="P">Pria</option>
              <option value="W">Wanita</option>
            </select>

            <label>Tanggal Lahir:</label>
            <input type="date" class="form-control add-c" id="in-bd" name="bd" required />

            <label>Gaji:</label>
            <input type="number" class="form-control add-c" name="gaji" required />

            <label>Departemen:</label>
            <select class="form-select add-c" form="add-form" name="dep">
              <option selected value="Akuntansi">Akuntansi</option>
              <option value="Logistik">Logistik</option>
              <option value="Humas">Humas</option>
              <option value="Desain">Desain</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Manajemen">Manajemen</option>
            </select>

            <label>Jabatan:</label>
            <select class="form-select add-c" form="add-form" name="jab">
              <option selected value="Pegawai">Pegawai</option>
              <option value="Manajer">Manajer</option>
            </select>

            <button type="submit" class="btn btn-primary add-c">Tambah Pegawai</button>
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