<?php
include "koneksi.php";

$no = $_POST['no'];
$nama = $_POST['nama'];
$paket = $_POST['paket'];
$rating = $_POST['rating'];

$sql = "UPDATE linux SET nama = '$nama' , paket = '$paket', rating = '$rating' WHERE no = '$no'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header ("location:index.php?edit=sukses");
}else{
    header ("location:index.php?edit=gagal");
}

?>