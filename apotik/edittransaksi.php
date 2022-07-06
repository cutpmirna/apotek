<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <?php
        include("Koneksi.php");
        $id = $_GET['id'];
        $query_select = "SELECT * FROM transaksi WHERE id = '$id'";
        $result = mysqli_query ($koneksi,$query_select);
        $row = mysqli_fetch_array ($result);
    ?>
    <fieldset>

    <form action="updatetransaksi.php" method="post">
    <h1 style="text-align: right;"><img src="1.png" alt="logo"></a></h1>
    <table border="0" id= "table1"style="border-collapse:collapse ;">
        <tr  id="header">
            <td id="header" style="border-radius:32px 0px 0px 32px ;"><a href="Produk.php">Produk</a></td>
            <td id="header"><a href="pasien.php">Pasien</a></td>
            <td id="header" style="border-radius:0px 32px 32px 0px ;"><a href="transaksi.php">Transaksi</a></td>
        </tr>
         <tr>
            <td colspan="3">
         <table border="0" class="form2">
        <tr>
             <td colspan="3" style="color:black ;" id="judulform" > Form Edit Transaksi</td> 
         </tr>
       
         <input type="hidden" name="id" value = "<?php echo $row['id']?>" >
            <tr >
                <td>Kode Obat</td>
                <td><input type="text" name= "kodeobat"placeholder="masukkan kode obat.." value ="<?php echo $row['kodeobat'] ?> "></td>
            </tr>
            <tr>
                <td>Nomor Pasien</td>
                <td><input type="text" name="nomorpasien" placeholder="masukkan nomor pasien.." value ="<?php echo $row['nomorpasien'] ?> "></td>
            </tr>
            <tr>
                <td>Jumlah Obat</td>
                <td><input type="text" name="jumlah" placeholder="masukkan jumlah.." value ="<?php echo $row['jumlah'] ?>"></td>
            </tr>
            
            <tr>
                <td colspan="2" id="submit"><input type="submit" name = "update" value = "update"></td>
            </tr>
         </table>
        </td>
        </tr>
    </table>

    <h2>Daftar Transaksi</h2>
<table border="1" class ="table2">
<tr>
          <th>No</th>
          <th>Kode Obat</th>
          <th>Nomor Pasien</th>
          <th>Nama Pasien </th>
          <th>Alamat Pasien </th>
          <th>No. HP</th>
          <th>jumlah</th>
          <th>Harga</th>
          <th>Subtotal</th>
          <th>Aksi</th>  
</tr>
    <?php
        include ("Koneksi.php");
        $sub =0;
        $total = 0;
        $query_select = "select *from transaksi 
        JOIN produk
        ON produk.kodeobat = transaksi.kodeobat
        JOIN pasien 
        ON pasien.nomorpasien = transaksi.nomorpasien";
          
        $result = mysqli_query ($koneksi, $query_select);
        $i = 1;
        while ($row=mysqli_fetch_array ($result)) {  
            $sub=$row['jumlah']*$row['harga'];
            $total+=$sub;
     ?>

        <tr style = "background-color:#e9ecef;">
             <td><?=$i;?></td>
            <td><?=$row['kodeobat'];?></td>
            <td><?=$row['nomorpasien'];?></td>
            <td><?=$row['namapasien'];?></td>
            <td><?=$row['alamatpasien'];?></td>
            <td><?=$row['nomorhp'];?></td>
            <td><?=$row['jumlah'];?></td>
            <td><?=$row['harga'];?></td>
            <td><?=$sub;?></td>
            <td width= "100px"> <a href="edittransaksi.php?id=<?php echo $row['id'];?>"><img src="edit.png" height ="40px" width="40px"></a>
             <a href="hapustransaksi.php?id=<?php echo $row['id'];?>"><img src="delete.png" height ="40px" width="40px"></a> </a></td>
         
 
        </tr>
      <?php 
      $i++;
      } ?>  
</table>
</form>
</fieldset>
</body>
</html>