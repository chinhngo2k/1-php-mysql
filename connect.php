<?php
try {
    $dsn = 'mysql:host=localhost;dbname=qlnv';
    $db = new PDO($dsn, 'root', '');
    // echo "ket noi thanh cong";
} catch (Exception $erorr) {
    // echo "Loi ket noi";
}
