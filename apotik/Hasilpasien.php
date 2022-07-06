<?php
include ("Koneksi.php");
$nomorpasien = $_POST ['nomorpasien'];
$namapasien = $_POST ['namapasien'];
$alamat = $_POST ['alamatpasien'];
$nomorhp = $_POST ['nomorhp'];

if(isset($_POST['kirim'])){
    $sql ="INSERT INTO pasien (nomorpasien,namapasien,alamatpasien,nomorhp)
    values ('$nomorpasien','$namapasien','$alamat','$nomorhp')";
    $tambahdata = mysqli_query ($koneksi, $sql);
    if ($tambahdata){
         header ("location:pasien.php");

    } else {
        echo "data gagal diinput";
    }
}
?>
