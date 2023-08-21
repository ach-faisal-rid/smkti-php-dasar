<?php
    $nama = "faisal";
    $hobi = array("membaca", "menulis", "berenang");

    var_dump($nama);
    print_r($hobi);

    echo "Ini adalah baris kode sebelum die().";
    die("Program dihentikan di sini.");
    echo "Ini adalah baris kode setelah die().";