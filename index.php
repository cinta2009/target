<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jadwalbulanan</title>
    <style>
    /* Base Style */
    body {
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background: #faf7f7;
    }

    /* Form Container */
    form {
        background: #b8acac;
        padding: 20px;
        border-radius: 0px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
    }

    /* Typography & Inputs */
    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
        text-transform: capitalize;
    }

    input {
        width: 100%;
        padding: 12px;
        border-radius: 4px;
        /* border: 1px solid #db98ae; */
        box-sizing: border-box;
    }

    /* Button Specific */
    input[type="submit"] {
        margin-top: 15px;
        background: #be453c;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }

    input[type="submit"]:hover {
        background: #214a88;
    }
    </style>
</head>

<body>
    <?php
    include 'config.php'
    ?>

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