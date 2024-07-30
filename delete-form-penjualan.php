<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "DELETE FROM penjualan WHERE id_penjualan='$npm'";

if(mysqli_query($conn, $q)){
    echo "<script>alert('Data Terhapus')</script>";
} else {
    echo "<script>alert('Gagal Menghapus data')</script>" . mysqli_error($conn);
}

echo "<a href='tabel-penjualan.php'>Kembali</a>";
?>
