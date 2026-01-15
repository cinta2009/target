<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jadwalbulanan</title>
    <style>
    body {
        font-family: sans-serif;
        padding: 20px;
        background-color: #8d3443;
        justify-content: center;
        align-items: center;
        height: 85vh;
        display: flex;
        background: linear-gradient(to bottom, #ff9999, #82b7cf, #af5d9d);
        min-height: 100vh
    }

    form {
        background: #f0b1b1;
        padding: 20px;
        border-radius: 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
        text-transform: capitalize;
    }

    input[type="text"] {
        width: 100%;
        padding: 15px;
        margin-top: 5px;
        border: 1px solid #db98ae;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #be453c;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #887521;
    }
    </style>
</head>

<body>
    <?php
    include 'config.php'
    ?>
    <h1>
        <center>JADWAL BULANAN</center>
    </h1>

    <form action="prosesinput.php" method="post">
        <label>bulan</label>
        <input type="text" name="bulan">
        <label>target</label>
        <input type="text" name="target">
        <label>to_do</label>
        <input type="text" name="to_do">
        <input type="submit" value="kirim">
    </form>
</body>

</html>