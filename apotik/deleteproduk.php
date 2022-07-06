<?php
include ("Koneksi.php");
$kodeobat = $_GET['kodeobat'];
$sql = "DELETE FROM produk WHERE kodeobat='$kodeobat'";
$deletedata = mysqli_query ($koneksi,$sql);

if ($deletedata){
    // echo "data telah di hapus";
    header ("location:Produk.php");
} else {
    echo "data gagal di hapus";
}
?>