<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="perpus";

    //memberi alamat kondisi
$koneksi=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo "koneksi ke database gagal: ".mysqli_connect_error();
}
?>