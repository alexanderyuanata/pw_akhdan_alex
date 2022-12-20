<!--Navbar-->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbar">
      <!--Links for Webpages-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../home.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pegawai/pegawai.php">Daftar Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../barang/barang.php">Daftar Barang</a>
        </li>
        <!--Dropdown-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manajemen
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../pegawai/add-pegawai.php">Karyawan</a></li>
            <li><a class="dropdown-item" href="../barang/add-barang.php">Barang</a></li>
          </ul>
        </li>
      </ul>

      <!--Links for Login & Registration-->
      <ul class="navbar-nav" id="nav-login">
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a>
        </li>
      </ul>

    </div>

  </div>
</nav>