<?php
include "koneksi.php";

$no = $_GET['no'];
$sql = "SELECT * FROM linux WHERE NO = '$no' ";
$query = mysqli_query($koneksi,$sql);

while($linux = mysqli_fetch_assoc($query)){

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
 </head>
 <body>
    <h1>Edit Data</h1>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="no" value = "<?php echo $linux['no']; ?>"><br><br>
        <label>Nama</label> 
        <input type="text" name="nama" value = "<?php echo $linux['nama']; ?>"><br><br>
        <label>Paket</label> 
        <input type="text" name="paket" value = "<?php echo $linux['paket']; ?>"><br><br>
        <label>Rating</label> 
        <input type="number" name="rating" value = "<?php echo $linux['rating']; ?>"><br><br>
        <input type="submit"  value="simpan" name="simpan">
    </form>
 </body>
 </html>



<?php
}
?>