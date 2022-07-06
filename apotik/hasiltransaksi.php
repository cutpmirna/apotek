<?php
include ("Koneksi.php");
$kodeobat= $_POST ['kodeobat'];
$nomorpasien = $_POST ['nomorpasien'];
$jumlah = $_POST ['jumlah'];


if(isset($_POST['kirim'])){
    $sql =" insert into transaksi (kodeobat, nomorpasien, jumlah)
    values ('$kodeobat','$nomorpasien','$jumlah')";
    $tambahdata = mysqli_query ($koneksi, $sql);
    if ($tambahdata){
        header ("location:transaksi.php");

    } else {
        echo "data gagal diinput";
    }
}
?>
