<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
    /* style.css */

    /* Pengaturan halaman agar rapi di tengah */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 40px;
        display: flex;
        justify-content: center;
    }

    /* Memperbaiki tampilan kontainer */
    .container {
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        width: 100%;
        max-width: 800px;
    }

    /* Gaya untuk tombol 'Kembali' */
    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Mempercantik Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background-color: #fff;
    }

    table th,
    table td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: left;
    }

    /* Header Tabel */
    table thead th {
        background-color: #333;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
    }

    /* Efek baris selang-seling */
    table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Efek saat baris disorot (hover) */
    table tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Gaya untuk link Hapus dan Edit */
    table td a {
        text-decoration: none;
        margin-right: 10px;
        font-weight: bold;
    }

    table td a[href*="hapus"] {
        color: #d9534f;
        /* Warna merah untuk hapus */
    }

    table td a[href*="update"] {
        color: #f0ad4e;
        /* Warna oranye untuk edit */
    }

    table td a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    ?>

    <!-- tampilkan data dari database -->

    <?php
    // query untuk mendapatkan data dari database
    $sql = "SELECT * FROM tbjadwal";
    $result = mysqli_query($koneksi, $sql);
    ?>
    <div class="container">
        <!-- tombol kembali ke halaman input data -->
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
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['bulan']); ?></td>
                        <td><?= htmlspecialchars($row['target']); ?></td>
                        <td><?= htmlspecialchars($row['to_do']); ?></td>
                        <!-- tombol hapus data tanpa konfirmasi -->
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

        <p>Data tidak ditemukan</p>

        <?php endif; ?>

</body>

</html>