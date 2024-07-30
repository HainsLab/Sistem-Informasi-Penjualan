<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
include "koneksi.php";

$q = "SELECT * FROM produk";
$ex = mysqli_query($conn, $q);

 
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
            <a>Tabel Produk</a>
        </div>
        <a href='form-penjualan.php'>Tambah Data Produk</a>
        <div class="table-container">
        <table border=1>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Barang</th>
                <th>Stock Barang</th>
                <th>Action</th>
            </tr>

            <?php
            while ($r = mysqli_fetch_array($ex)) {
                echo "<tr>";
                echo "<td>" . $r['kd_barang'] . "</td>";
                echo "<td>" . $r['nm_barang'] . "</td>";
                echo "<td>" . $r['jmlh_barang'] . "</td>";
                echo "<td>" . $r['harga'] . "</td>";
                echo "<td>" . $r['stock'] . "</td>";
                echo "<td>
                    <a href='ubah-form-produk.php?n=" . $r['kd_barang'] . "'>
                    <i class='bx bxs-edit-alt'></i>
                    <span>ubah</span>
                    </a>
                    <a href='delete-form-produk.php?n=" . $r['kd_barang'] . "'>
                    <i class='bx bx-trash' ></i>
                    <span>hapus</span>
                    </a>
                  </td>";
                echo "</tr>";
            }
            ?>

        </table>
        </div>
    </form>
  </nav>
  </body>
</html>