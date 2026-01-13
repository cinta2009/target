<?php
$koneksi = mysqli_connect("localhost", "root","root","dbsiswa");
if (!$koneksi){
    die("koneksi gagal:".mysqli_connect_error());
}
?>