<?php
    include 'proses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id" value="<?= $data[0]['id']?>" id="" placeholder="id"> <br>
        <input type="text" name="nim" value="<?= $data[0]['nim']?>" id="" placeholder="nim"> <br>
        <input type="text" name="nama" placeholder="nama" value="<?= $data[0]['nama']?>"> <br>
        <input type="text" name="jurusan" placeholder="jurusan" value="<?= $data[0]['jurusan']?>"> <br>
        <button name="update" type="submit">EDIT</button>
    </form>
</body>
</html>