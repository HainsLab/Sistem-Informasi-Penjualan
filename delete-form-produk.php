<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "DELETE FROM produk WHERE kd_barang='$npm'";

if(mysqli_query($conn, $q)){
    echo "<script>alert('Data Terhapus')</script>";
} else {
    echo "<script>alert('Gagal Menghapus data')</script>" . mysqli_error($conn);
}

echo "<a href='tabel-produk.php'>Kembali</a>";
?>
