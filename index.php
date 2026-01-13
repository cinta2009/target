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
        <label>nama</label>
        <input type="text" name="nama">
        <label>kelas</label>
        <input type="text" name="kelas">
        <label>umur</label>
        <input type="text" name="umur">
        <label>jenisKelamin</label>
        <input type="text" name="jenisKelamin">
        <label>alamat</label>
        <input type="text" name="alamat">
        <input type="submit" value="kirim">

    </form>
</body>

</html>