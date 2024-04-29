<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>From Input</h2>
    <from method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </from>
    <?php
    if(isset($_POST['nama'])) {
        echo 'selamat datang' .htmlspecialchars($_POST['nama']);
    } else {
        echo ' selamat datang ';
    }
    ?>
</body>
</html>