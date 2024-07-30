<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: form-produk.php");
    exit();
  }
  
  include "koneksi.php";
  
  if (isset($_POST['bok'])) {
      $kd = $_POST['tkdbarang'];
      $nama = $_POST['tnama'];
      $jumlah = $_POST['tjumlah'];
      $harga = $_POST['tharga'];
      $stock = $_POST['tstock'];
      $q = "INSERT INTO produk(kd_barang, nm_barang, jmlh_barang, harga,stock)";
      $q .= " VALUES ('$kd', '$nama', '$jumlah', '$harga','$stock')";
      mysqli_query($conn, $q);
      echo "<script>alert('Data Tersimpan')</script>";
  }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Sistem Informasi Penjualan</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="Home.js" defer></script>
  </head>
  <body>
    <nav class="sidebar locked">
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i>

      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Dashboard</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="Home.php" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span>Home</span>
              </a>
            </li>
            <li class="item">
              <a href="form-penjualan.php" class="link flex">
                <i class="bx bx-file"></i>
                <span>Form Penjualan</span>
              </a>
            </li>
            <li class="item">
              <a href="form-produk.php" class="link flex">
                <i class="bx bx-file"></i>
                <span>Form Produk</span>
              </a>
            </li>
            <li class="item">
              <a href="form-pelanggan.php" class="link flex">
                <i class="bx bx-file"></i>
                <span>Form Pelanggan</span>
              </a>
            </li>
            </li>
                <li class="item">
                    <a href="tabel-penjualan.php" class="link flex">
                        <i class="bx bx-table"></i>
                        <span>Tabel Penjualan</span>
                    </a>
                </li>
                <li class="item">
                    <a href="tabel-produk.php" class="link flex">
                        <i class="bx bx-table"></i>
                        <span>Tabel Produk</span>
                    </a>
                </li>
                <li class="item">
                    <a href="tabel-pelanggan.php" class="link flex">
                        <i class="bx bx-table"></i>
                        <span>Tabel Pelanggan</span>
                    </a>
                </li>
            </ul>
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Setting</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="logout.php" class="link flex">
                <i class="uil uil-signout"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
    </nav>

    <!-- Navbar -->
    <header class="header">
    <nav class="nav">
    <a href="Home.php" class="nav_logo">Sistem Informasi Penjualan</a>
    <form action="" method="POST">
        <div id="username">
            <?php echo "<p> Username Active : " . $_SESSION['username'] . "</p>"; ?>
        </div>
    </nav>
    </header>
  <!-- konten -->
  <nav class="konten">
  <form action="" method="POST">
        <div class="judul">
            <a>Form Produk</a>
        </div>
        <div class="input_box">
        Kode Barang: <input type="text" name="tkdbarang"/><br/>
        </div>
        <div class="input_box">
        Nama Barang: <input type="text" name="tnama"/><br/>
        </div>
        <div class="input_box">
        Jumlah Barang : <input type="text" name="tjumlah"/><br/>
        </div>
        <div class="input_box">
        Harga Barang : <input type="text" name="tharga"/><br/>
        </div>
        <div class="input_box">
        Stock Barang : <input type="text" name="tstock"/><br/>
        </div>
        <input type="submit" name="bok" value="Simpan"/>
  </div>
  </nav>
  </body>
</html>