<?php
include ("Koneksi.php");
$kodeobat = $_POST ['kodeobat'];
$namaobat = $_POST ['namaobat'];
$satuan = $_POST ['satuan'];
$harga = $_POST ['harga'];

if(isset($_POST['perbaharui'])){
    $sql = "UPDATE produk SET 
    namaobat ='$namaobat', satuan ='$satuan', harga = '$harga'
    WHERE kodeobat ='$kodeobat'";
    $updatedata = mysqli_query($koneksi, $sql);
    if ($updatedata){
      // echo "bisa gaiiisss****";
        header ("location:Produk.php");

    } else {
        echo "yahhh gagal :( ttp semangattt";
    }
}
?>