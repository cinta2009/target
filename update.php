<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Siswa</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f7f9;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        /* Flexbox untuk menyusun isi container ke tengah */
        display: flex;
        flex-direction: column;
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 25px;
        font-size: 1.5rem;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
        font-weight: 600;
        color: #34495e;
        text-transform: capitalize;
    }

    input[type="text"] {
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #dcdfe6;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus {
        outline: none;
        border-color: #3498db;
    }

    /* Tombol Update */
    input[type="submit"] {
        background-color: #3498db;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
        width: 100%;
        margin-bottom: 10px;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    /* Tombol Kembali */
    .container a {
        text-decoration: none;
        display: flex;
        justify-content: center;
    }

    button {
        background-color: #95a5a6;
        color: white;
        padding: 10px 30px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.3s;
        width: 100%;
    }

    button:hover {
        background-color: #7f8c8d;
    }

    br {
        display: none;
        /* Menghilangkan br bawaan agar spacing diatur CSS */
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