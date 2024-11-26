<?php

function tambah_aksi (){
include 'koneksi.php';

$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$kode_buku = $_POST['kode_buku'];
$genre = $_POST['genre'];

mysqli_query($koneksi,"insert into peminjaman values('$id','$nama_buku','$kode_buku','$genre')");
header("location:anggota.php");
}
?>