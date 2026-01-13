<?php
$koneksi = mysqli_connect("localhost", "root","root","dbjadwal");
if (!$koneksi){
    die("koneksi gagal:".mysqli_connect_error());
}
?>