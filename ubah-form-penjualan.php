<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "SELECT * FROM penjualan WHERE id_penjualan = '$npm'";
$ex = mysqli_query($conn, $q);
$r = mysqli_fetch_array($ex);
?>

<form action="#" method="post">
    id penjualan : <input type="text" name="tid" value="<?php echo $r['id_penjualan'] ; ?>"/><br/>
    metode penjualan : <input type="text" name="tmetode" value="<?php echo $r['metode_penjualan']; ?>"/><br/>
    jmlh penjualan : <input type="text" name="tjumlah" value="<?php echo $r['jmlh_penjualan'] ; ?>"/><br/>
    Tanggal Penjualan : <input type="text" name="ttgl" value="<?php echo $r['tgl_penjualan']; ?>"/><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="tabel-penjualan.php">Kembali</a>

<?php
if (isset($_POST['bok'])) {
    $id = $_POST['tid'];
    $metode = $_POST['tmetode'];
    $jumlah = $_POST['tjumlah'];
    $tgl = $_POST['ttgl'];

    $q = "UPDATE penjualan SET id_penjualan='$id', metode_penjualan='$metode',  jmlh_penjualan='$jumlah', tgl_penjualan='$tgl' ";
    $q .= "WHERE id_penjualan='$id'";

    if(mysqli_query($conn, $q)){
       echo "<script>alert('Data Berhasil diubah')</script>";
    } else {
        echo "<script>alert('Gagal Mengubah Data')</script>"; 
    }
}
?>
