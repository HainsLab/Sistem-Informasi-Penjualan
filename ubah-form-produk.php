<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "SELECT * FROM produk WHERE Kd_barang = '$npm'";
$ex = mysqli_query($conn, $q);
$r = mysqli_fetch_array($ex);
?>

<form action="#" method="post">
    id penjualan : <input type="text" name="tkdbarang" value="<?php echo $r['kd_barang'] ; ?>"/><br/>
    metode penjualan : <input type="text" name="tnama" value="<?php echo $r['nm_barang']; ?>"/><br/>
    jmlh penjualan : <input type="text" name="tjumlah" value="<?php echo $r['jmlh_barang'] ; ?>"/><br/>
    Tanggal Penjualan : <input type="text" name="tharga" value="<?php echo $r['harga']; ?>"/><br/>
    Stock : <input type="text" name="tstock" value="<?php echo $r['stock']; ?>"/><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="tabel-produk.php">Kembali</a>

<?php
if (isset($_POST['bok'])) {
    $kd = $_POST['tkdbarang'];
    $nama = $_POST['tnama'];
    $jumlah = $_POST['tjumlah'];
    $harga = $_POST['tharga'];
    $stock = $_POST['tstock'];

    $q = "UPDATE produk SET kd_barang='$kd', nm_barang='$nama',  jmlh_barang='$jumlah', harga='$harga', stock='$stock' ";
    $q .= "WHERE kd_barang='$kd'";

    if(mysqli_query($conn, $q)){
       echo "<script>alert('Data Berhasil diubah')</script>";
    } else {
        echo "<script>alert('Gagal Mengubah Data')</script>"; 
    }
}
?>
