<?php
include ("Koneksi.php");
$kodeobat = $_GET['nomorpasien'];
$sql = "DELETE FROM pasien WHERE nomorpasien='$kodeobat'";
$deletedata = mysqli_query ($koneksi,$sql);

if ($deletedata){
    // echo "data telah di hapus";
    header ("location:pasien.php");
} else {
    echo "data gagal di hapus";
}
?>