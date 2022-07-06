<?php
$servername ='localhost';
$username ='root';
$password ='';
$databasename ='apotik';

$koneksi =mysqli_connect ($servername, $username,$password,$databasename);
if (!$koneksi ){
    echo "koneksi gagal";
}
 else{
  //  echo "berhasil ygt";
}
?>