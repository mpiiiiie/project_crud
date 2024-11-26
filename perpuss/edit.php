<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<h2>silakan edit</h2>

    

<?php

                include 'koneksi.php';
                $id = $_GET['id'];
                $data1 = mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE id='$id' ");
                while($d = mysqli_fetch_array($data1)){
?>
            <form method="post" action="update.php">
            <table>
                <tr>   
                    <td>nama buku</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>" >
                        <input type="text" name="nama_buku" value="<?php echo $d['nama_buku']; ?>" >
                    </td>
                </tr>
                <tr>
                    <td>kode buku</td>
                    <td><input type="number" name="kode_buku" value="<?php echo $d['kode_buku']; ?>"></td>
                </tr>
                <tr>
                    <td>genre</td>
                    <td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"</td>
                </tr>

                </form>

                <?php
                }
                ?>
    </body>
</html>