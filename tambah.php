<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    
</head>
<body>
    <h1> Tambah Data</h1>

    <form action="proses_tambah.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama"><br><br>
        <label>Paket</label>
        <input type="text" name="paket"><br><br>
        <label>Rating</label>
        <input type="number" name="rating"><br><br>
        <input type="submit" name="simpan">

    </form>
</body>
</html>