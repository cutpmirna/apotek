<?php
include ("Koneksi.php");
$id = $_GET['id'];
$sql = "DELETE FROM transaksi WHERE id='$id'";
$deletedata = mysqli_query ($koneksi,$sql);

if ($deletedata){
    //  echo "data telah di hapus";
   header ("location:transaksi.php");
} else {
    echo "data gagal di hapus";
}
?>