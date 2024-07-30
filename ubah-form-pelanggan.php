<?php
include "koneksi.php";
$npm = $_GET['n'];
$q = "SELECT * FROM pelanggan WHERE id_pelanggan = '$npm'";
$ex = mysqli_query($conn, $q);
$r = mysqli_fetch_array($ex);
?>

<form action="#" method="post">
    Id Pelanggan : <input type="text" name="id" value="<?php echo $r['id_pelanggan'] ; ?>"/><br/>
    Nama Pelanggan : <input type="text" name="nama" value="<?php echo $r['nm_pelaggan']; ?>"/><br/>
    Alamat : <input type="text" name="alamat" value="<?php echo $r['alamat'] ; ?>"/><br/>
    No Telpon : <input type="text" name="notlp" value="<?php echo $r['no_tlp']; ?>"/><br/>
    <input type="submit" name="bok" value="Ubah Data"/>
</form>
<a href="tabel-pelanggan.php">Kembali</a>

<?php
if (isset($_POST['bok'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notlp= $_POST['notlp'];

    $q = "UPDATE pelanggan SET id_pelanggan='$id', nm_pelaggan='$nama',  alamat='$alamat', no_tlp='$notlp' ";
    $q .= "WHERE id_pelanggan='$id'";

    if(mysqli_query($conn, $q)){
       echo "<script>alert('Data Berhasil diubah')</script>";
    } else {
        echo "<script>alert('Gagal Mengubah Data')</script>"; 
    }
}
?>
