<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$kode_buku = $_POST['kode_buku'];
$genre = $_POST['genre'];
 
// update data ke database
mysqli_query($koneksi,"update peminjaman set nama_buku='$nama_buku', kode_buku='$kode_buku', genre='$genre' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
 
?>