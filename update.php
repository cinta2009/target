<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Siswa</title>
    <style>
    /* Reset dasar */
    body {
        font-family: sans-serif;
        background: #8d3443;
        /* Warna dasar sesuai kode kamu */
        display: flex;
        justify-content: center;
        padding: 50px 20px;
        margin: 0;
    }

    /* Kotak Form */
    .container {
        background: #f0b1b1;
        padding: 25px;
        border-radius: 20px;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-top: 0;
    }

    /* Input & Label */
    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        /* Biar gak luber */
    }

    /* Tombol */
    input[type="submit"],
    button {
        width: 100%;
        padding: 12px;
        margin-top: 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    input[type="submit"] {
        background: #be453c;
        color: white;
    }

    button {
        background: #ddd;
        color: #333;
    }

    input[type="submit"]:hover,
    button:hover {
        opacity: 0.8;
    }
    </style>
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
        $to_do = $_POST['to_do'];

        mysqli_query($koneksi, "UPDATE tbjadwal 
        SET bulan='$bulan', target='$target',to_do='$to_do' 
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

            <label>target</label>
            <input type="text" name="target" value="<?= htmlspecialchars($siswa['target']); ?>" required>

            <label>to_do</label>
            <input type="text" name="to_do" value="<?= htmlspecialchars($siswa['to_do']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <br>
        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>