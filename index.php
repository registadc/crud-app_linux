<?php
include "koneksi.php";
$sql = "SELECT * FROM linux";
$query = mysqli_query($koneksi,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1>Tabel Data</h1>
    <a href="tambah.php"><button type="button" class="btn btn-primary btn-sm">Tambah</button></a>

    <table border="1" class="table-danger">
        <tr class="table-danger">
            <th>No</th>
            <th>Nama</th>
            <th>Paket</th>
            <th>Rating</th>
            <th>Aksi</th>
        </tr>

        <?php
        while($linux = mysqli_fetch_assoc($query)){
            echo "<tr >";
            echo "<td>" . $linux['no'] . "</td>";
            echo "<td>" . $linux['nama'] . "</td>";
            echo "<td>" . $linux['paket'] . "</td>";
            echo "<td>" . $linux['rating'] . "</td>";
            echo "<td>";
                echo "<a href='edit.php?no=" . $linux['no'] . "'>Edit</a>";
                echo "|";
                echo "<a href='hapus.php?no=" . $linux['no'] . "'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>