<?php
include ("Koneksi.php");
$kodeobat = $_POST ['kodeobat'];
$nomorpasien = $_POST ['nomorpasien'];
$jumlah = $_POST ['jumlah'];
$id = $_POST ['id'];


if(isset($_POST['update'])){
    $sql = "UPDATE transaksi SET 
     kodeobat ='$kodeobat', nomorpasien ='$nomorpasien', jumlah = '$jumlah'
    WHERE  id='$id'";
    $updatedata = mysqli_query($koneksi, $sql);
    if ($updatedata){
      // echo "bisa gaiiisss****";
        header ("location:transaksi.php");

    } else {
        echo "yahhh gagal :( ttp semangattt";
    }
}
?>