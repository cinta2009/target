<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Bulanan</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f2f4f7;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background: #ffffff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        border: 1px solid #e1e4e8;
    }

    h3 {
        margin-top: 0;
        color: #333;
        border-bottom: 2px solid #0056b3;
        padding-bottom: 10px;
        margin-bottom: 20px;
        font-size: 1.2rem;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #555;
        text-transform: capitalize;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        display: block;
    }

    /* Memberi warna merah tipis jika input wajib diisi tapi masih kosong */
    input[type="text"]:focus:invalid {
        border-color: #e74c3c;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #0056b3;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #004494;
    }
    </style>
</head>

<body>
    <?php
    include 'config.php'
    ?>

    <form action="prosesinput.php" method="post">
        <h3>Jadwal Bulanan</h3>

        <label>bulan</label>
        <input type="text" name="bulan" required oninvalid="this.setCustomValidity('Kolom bulan tidak boleh kosong!')"
            oninput="setCustomValidity('')">

        <label>target</label>
        <input type="text" name="target" required
            oninvalid="this.setCustomValidity('Target harus diisi agar data valid.')" oninput="setCustomValidity('')">

        <label>to_do</label>
        <input type="text" name="to_do" required
            oninvalid="this.setCustomValidity('Rencana kegiatan (to_do) wajib diisi.')" oninput="setCustomValidity('')">

        <input type="submit" value="kirim">
    </form>
</body>

</html>