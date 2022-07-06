<?php
include ("Koneksi.php");
$kodeobat = $_POST ['kodeobat'];
$namaobat = $_POST ['namaobat'];
$satuan = $_POST ['satuan'];
$harga = $_POST ['harga'];

if(isset($_POST['kirim'])){
    $sql ="insert into produk (kodeobat, namaobat, satuan, harga)
    values ('$kodeobat','$namaobat','$satuan','$harga')";
    $tambahdata = mysqli_query ($koneksi, $sql);
    if ($tambahdata){
        header ("location:Produk.php");

    } else {
        echo "data gagal diinput";
    }
}
?>
