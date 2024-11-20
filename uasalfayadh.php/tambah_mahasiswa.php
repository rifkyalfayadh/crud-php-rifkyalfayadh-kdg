<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>tambah data mahasiswa</title>
</head>
<body>
 <h2>tambah data mahasiswa</h2>
 <form action="proses_tambah.php" method="POST">
    <label>Nama</label>
    <input type="text" name="nama" required><br>
    <label>NIM</label>
    <input type="text" name="nim" required><br>
    <label>Email</label>
    <input type="text" name="email" required><br>
    <label>Nomor</label>
    <input type="text" name="nomor" required><br>
    <label>Jurusan</label>
    <input type="text" name="jurusan" required><br>
    <input type="submit" value="tambah">
</form>
</body>
</html>