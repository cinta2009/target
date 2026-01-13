<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'config.php';

    $id = $_GET['id'];

    // ambil data lama
    $sql = mysqli_query($koneksi, "SELECT * FROM tbjadwal WHERE id='$id'");
    $siswa = mysqli_fetch_assoc($sql);

    // proses update
    if (isset($_POST['update'])) {
        $bulan = $_POST['bulan'];
        $target = $_POST['target'];
        $todo = $_POST['to do'];

        mysqli_query($koneksi, "UPDATE tbjadwal 
        SET bulan='$bulan', target='$target',to do='$todo' 
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    <div class="container">
        <h2>Update Data Siswa</h2>

        <form method="post">
            <label>bulan</label>
            <input type="text" name="bulan" value="<?= htmlspecialchars($siswa['bulan']); ?>" required>

            <label>targetbulanan</label>
            <input type="text" name="targetbulanan" value="<?= htmlspecialchars($siswa['targetbulan']); ?>" required>

            <label>todo</label>
            <input type="text" name="todo" value="<?= htmlspecialchars($siswa['todo']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <br>
        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>