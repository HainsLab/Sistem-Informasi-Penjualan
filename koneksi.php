<?php 
 
$server = "localhost";
$user = "id20962062_sistem_penjualan";
$pass = "Ga125jbcn_";
$database = "id20962062_kelompok5";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>