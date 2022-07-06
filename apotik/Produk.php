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
    <fieldset>
    <form action="Hasilproduk.php" method="post">
    <h1 style="text-align: right;"><img src="1.png" alt="logo"></a></h1>
    <table border="0" id= "table1"style="border-collapse:collapse ;">
        <tr  id="header">
            <td id="header" style="border-radius:32px 0px 0px 32px ;"><a href="Produk.php">Produk</a></td>
            <td id="header"><a href="pasien.php">Pasien</a></td>
            <td id="header" style="border-radius:0px 32px 32px 0px ;"><a href="transaksi.php">Transaksi</a></td>
        </tr>
        <tr>
            <td colspan="3">
         <table border=0" class="form2">
        <tr>
             <td colspan="3" style="color:black ;" id="judulform" > Form Produk</td> 
         </tr>
       
            <tr >
                <td>Kode Obat</td>
                <td><input type="text" name="kodeobat" placeholder="Masukkan kode obat.."></td>
            </tr>
            <tr>
                <td>Nama Obat</td>
                <td><input type="text" name="namaobat" placeholder="Masukkan nama obat.."></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><input type="text" name="satuan" placeholder="Masukkan satuan.."></td>
            </tr><tr>
                <td>Harga (Rp)</td>
                <td><input type="text" name="harga" placeholder="Masukkan harga.."></td>
            </tr>
            <tr>
            
                <td colspan="2" id="submit"><input type="submit" name="kirim" value="submit"></td>
            </tr>
         </table>
        </td>
        </tr>
    </table>

    <h2>Daftar Produk</h2>
<table border="1" class ="table2">
<tr>
    <th>No</th>
    <th>Kode Obat</th>
    <th>Nama Obat</th>
    <th>Satuan</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>
<?php 
        include ("Koneksi.php");
        $query_select = "SELECT * FROM  produk ORDER BY kodeobat ASC";
        $result = mysqli_query ($koneksi, $query_select);
        $i = 1;
        while ($row=mysqli_fetch_array ($result)) {  
            ?>

        <tr style = "background-color:#e9ecef;">
            <td><?=$i;?></td>
            <td><?=$row['kodeobat'];?></td>
            <td><?=$row['namaobat'];?></td>
            <td><?=$row['satuan'];?></td>
            <td><?=$row['harga'];?></td>
            <td width="100px"> <a href="editproduk.php?kodeobat=<?php echo $row['kodeobat'];?>"><img src="edit.png" height ="40px" width="40px"></a>
             <a href="deleteproduk.php?kodeobat=<?php echo $row['kodeobat'];?>"><img src="delete.png" height ="40px" width="40px"></a></td>
           
        </tr>
      <?php 
      $i++;
      } ?>  
</table>
</form>
</fieldset>
</body>
</html>