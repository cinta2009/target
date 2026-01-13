<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bulan = $_POST['bulan'];
    $target = $_POST['target'];
    $to_do = $_POST['to_do'];

    // insert data ke database
    $sql = "INSERT INTO tbjadwal (bulan, target, to_do) VALUES ('$bulan', '$target','$to_do')";
    $result = mysqli_query($koneksi, $sql);

    // Tutup koneksi
    mysqli_close($koneksi);

    // Redirect ke halaman index.php
    header("Location: view-data.php");
    exit();
}
?>