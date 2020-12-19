<?php
include_once('./connect.php');
try {
    $dsn = 'mysql:host=localhost;dbname=qlnv';
    $db = new PDO($dsn, 'root', '');
    echo "ket noi thanh cong";
} catch (Exception $erorr) {
    echo "Loi ket noi";
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    if ($name && $address && $salary) {
        $query = "insert employee(name, address, salary) values('$name', '$address', $salary)";
        $db->query($query);

        header('Location: ./index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan li nhan vien</title>
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">

        <div class="form-group">
            <label>Name </label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label>Address </label>
            <input type="text" name="address">
        </div>

        <div class="form-group">
            <label>Salary </label>
            <input type="number" name="salary">
        </div>

        <button type="submit" class="btn btn-primary" name="save">Save</button>

    </form>




    <script src="boostrap/bootstrap.bundle.min.js"></script>
</body>

</html>