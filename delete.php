<?php
include_once('./connect.php');
$id = $_GET['del'];
//truy van
$query = "delete from employee where id='$id' ";
$res = $db->query($query);
// $data = $res->fetchAll(PDO::FETCH_ASSOC);
// var_dump($data);

// header('location:./index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <span class="d-block text-center"><i class="fas fa-trash-alt"></i></span>
    <h3 class="d-block text-center">Bạn đã xóa thành công</h3>
    <script src="boostrap/bootstrap.bundle.min.js"></script>
    <div class="d-block text-center"><a href="./index.php"><i class="fas fa-undo-alt"></i></a></div>
</body>

</html>