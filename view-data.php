<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    /* style.css */

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background-color: #7999c9;
        margin: 0;
        padding: 40px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Kotak container putih bersih (tanpa garis luar hitam) */
    .container {
        width: 100%;
        max-width: 850px;
        background: white;
        box-sizing: border-box;
        padding: 20px;
    }

    /* Lengkungan untuk bagian atas dan bawah agar rapi */
    .container:first-of-type {
        border-radius: 12px 12px 0 0;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .container:last-of-type {
        border-radius: 0 0 12px 12px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
    }

    /* Tombol Kembali */
    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
    }

    /* TABEL DENGAN GARIS HITAM FULL */
    table {
        width: 100%;
        border-collapse: collapse;
        /* Biar garis tidak renggang */
        margin: 10px 0;
        border: 1px solid #000;
        /* Garis hitam luar tabel */
    }

    /* Header Tabel: SEMUA kolom jadi hitam (termasuk kolom aksi) */
    table th {
        background-color: #333;
        color: white;
        padding: 12px;
        text-align: center;
        border: 1px solid #000;
        /* Garis hitam antar sel header */
        text-transform: uppercase;
        font-size: 13px;
    }

    /* Sel Isi Tabel */
    table td {
        padding: 12px;
        color: #000;
        border: 1px solid #000;
        /* Garis hitam di setiap sisi sel data */
        vertical-align: middle;
    }

    /* Mengatur kolom aksi agar teks di tengah */
    table td:last-child {
        text-align: center;
    }

    /* LINK EDIT & HAPUS (Tanpa garis bawah tulisan) */
    table td a {
        text-decoration: none;
        font-weight: bold;
        margin: 0 8px;
        display: inline-block;
    }

    table td a[href*="hapus"] {
        color: #ff0000;
        /* Merah */
    }

    table td a[href*="update"] {
        color: #ffaa00;
        /* Kuning/Oranye */
    }

    table td a:hover {
        opacity: 0.7;
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