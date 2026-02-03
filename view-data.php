<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data jadwal</title>
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f8f9fa;
        margin: 20px;
        color: #333;
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th {
        background-color: #007bff;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
        padding: 12px;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #dee2e6;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    button {
        background-color: #6c757d;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background-color: #5a6268;
    }

    a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        margin-right: 10px;
    }

    a:hover {
        color: #0056b3;
    }

    .action-cell {
        display: flex;
        gap: 10px;
    }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    ?>

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
                    </tr>
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