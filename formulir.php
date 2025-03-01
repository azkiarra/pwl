<!DOCTYPE html>git add README.md
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Masuk</title>
</head>
<body>

    <h1>Formulir Pendaftaran Mahasiswa</h1>

    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
    <div>NIM</div>
        <div><input type="text" name="fnim"></div>
        <div>NAMA</div>
        <div><input type="text" name="fnama"></div>
        <div><input type="submit" value="submit"></div>
    </form>
    <div>
        <?php
        if (isset($_POST['fnim'])){
            $nim=$_POST['fnim'];
            $nama=$_POST['fnama'];
            echo "Welcome NIM : $nim dengan Nama : $nama, anda berhasil masuk.";
        }
        ?>
    </div>
</body>
</html>