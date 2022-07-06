<?php
include ("Koneksi.php");
$nomorpasien = $_POST ['nomorpasien'];
$namapasien = $_POST ['namapasien'];
$alamat = $_POST ['alamatpasien'];
$nomorhp = $_POST ['nomorhp'];

if(isset($_POST['update'])){
    $sql ="UPDATE pasien SET 
    namapasien='$namapasien',alamatpasien='$alamat',nomorhp='$nomorhp'
    where nomorpasien ='$nomorpasien'";
    $tambahdata = mysqli_query ($koneksi, $sql);
    if ($tambahdata){
         header ("location:pasien.php");
    } else {
        echo "data gagal diinput";
    }
}
?>
