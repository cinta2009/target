<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data jadwal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'config.php';
    ?>

    <!-- tampilkan data dari database -->

    <?php
    $sql = "SELECT * FROM tbjadwal";
    $result = mysqli_query($koneksi, $sql);
    ?>
    <div class="container">
        <a href="index.php"><button> Kembali</button></a>
    </div>
    <?php
    if (mysqli_num_rows($result) > 0): ?>
    <div class="container">
        <div>
            <table>
                <thead>
                    <tr>
                        <th>bulan</th>
                        <th>target</th>
                        <th>to_do</th>
                        <th>action</th>
                        < </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['bulan']); ?></td>
                        <td><?= htmlspecialchars($row['target']); ?></td>
                        <td><?= htmlspecialchars($row['to_do']); ?></td>
                        <td>
                            <a href="hapus.php?id=<?= urlencode($row['id']); ?>">Hapus</a>
                            <a href="update.php?id=<?= urlencode($row['id']); ?>">Edit</a>


                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>



        <?php else: ?>
        <p>
            <center>
                Data tidak ditemukan disini
            </center>
        </p>
        <?php endif; ?>

</body>

</html>