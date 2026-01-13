<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <label>umur</label>
        <input type="text" name="umur">
        <label>jenisKelamin</label>
        <input type="submit" value="kirim">

    </form>
</body>

</html>