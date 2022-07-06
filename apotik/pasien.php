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

    <form action="Hasilpasien.php" method="post">
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
             <td colspan="3" style="color:black ;" id="judulform" > Form Pasien</td> 
         </tr>
       
            <tr >
                <td>Nomor Pasien</td>
                <td><input type="text" name= "nomorpasien" placeholder="masukkan nomor pasien.." ></td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td><input type="text" name="namapasien" placeholder="masukkan nama pasien.."></td>
            </tr>
            <tr>
                <td>Alamat Pasien</td>
                <td><input type="text" name="alamatpasien" placeholder="masukkan alamat pasien  .."></td>
            </tr><tr>
                <td>No HP</td>
                <td><input type="text" name="nomorhp" placeholder="masukkan nomor HP.."></td>
            </tr>
            <tr>
            
                <td colspan="2" id="submit"><input type="submit" name="kirim" value="submit"></td>
            </tr>
         </table>
        </td>
        </tr>
    </table>

    <h2>Daftar Transaksi</h2>
<table border="1" class ="table2">

<tr>
    <th>No</th>
    <th>Nomor Pasien</th>
    <th>Nama Pasien</th>
    <th>Alamat Pasien </th>
    <th>No HP</th>
    <th>Aksi</th>
</tr>
<?php
        include ("Koneksi.php");
        $query_select = "SELECT * FROM  pasien ORDER BY nomorpasien ASC";
        $result = mysqli_query ($koneksi, $query_select);
        $i = 1;
        while ($row=mysqli_fetch_array ($result)) {  
            ?>
        <tr style = "background-color:#e9ecef";>
            <td><?=$i;?></td>
            <td><?=$row['nomorpasien'];?></td>
            <td><?=$row['namapasien'];?></td>
            <td><?=$row['alamatpasien'];?></td>
            <td><?=$row['nomorhp'];?></td>
            <td width="100px"> <a href="editpasien.php?nomorpasien=<?php echo $row['nomorpasien'];?>"><img src="edit.png" height ="40px" width="40px"></a> 
            <a href="hapuspasien.php?nomorpasien=<?php echo $row['nomorpasien'];?>"><img src="delete.png" height ="40px" width="40px"> </a></td>
           
        </tr>
      <?php 
      $i++;
      } ?>
        
</table>
</form>
</fieldset>
</body>
</html>