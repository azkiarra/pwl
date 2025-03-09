<?php
    include "Mahasiswa.php";

    echo "Data Mahasiswa: <br>";

    $mahasiswa1 = new Mahasiswa();
    $mahasiswa1->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
    $mahasiswa1->tampilkanData();

    $mahasiswa2 = new Mahasiswa();
    $mahasiswa2->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
    $mahasiswa2->tampilkanData();
?>
