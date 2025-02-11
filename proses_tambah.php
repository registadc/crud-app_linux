<?php
include "koneksi.php";

$nama = $_POST['nama'];
$paket = $_POST['paket'];
$rating = $_POST['rating'];

$sql = "INSERT INTO linux(nama,paket,rating) VALUES ('$nama','$paket','$rating') ";

$query = mysqli_query($koneksi,$sql);
if ($query){
    header ("location:index.php?simpan=sukses");
}else{
    header ("location:index.php?simpan=gagal");
}

?>