<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CRUD DATA<h2>
        <br/>
        <a href="index.php">kembali</a>
        <br/>
        <br/>
        <h3>TAMBAH DATA PEMINJAM</h3>
        <form method="post" action="tambah_aksi.php">
            <table>
                <tr>
                    <td>id</td>
                    <td><input type="number" name="id"></td>
                </tr>
                <tr>
                    <td>nama buku</td>
                    <td><input type="text" name="nama buku"></td>
                </tr>
                <tr>
                    <td>kode buku</td>
                    <td><input type="number" name="kode buku"></td>
                </tr>
                <tr>
                    <td>genre</td>
                    <td><input type="text" name="genre"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"</td>
                </tr>

</table>
</form>          
</body>
</html>