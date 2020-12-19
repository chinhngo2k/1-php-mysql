<?php
include_once('./connect.php');
$id = $_GET['id'];
//truy van
$query = "select * from employee where id='$id'";
$res = $db->query($query);
$data = $res->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan li nhan vien</title>
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">
</head>

<body>
    <br>
    <div class="container">
        <h2>Chi tiết nhân viên</h2>
        <?php foreach ($data as $employee) { ?>
            <ul class="list-group">
                <li class="list-group-item">ID: <?php echo $employee['id'] ?></li>
                <li class="list-group-item">Name: <?php echo $employee['name'] ?></li>
                <li class="list-group-item">Address: <?php echo $employee['address'] ?></li>
                <li class="list-group-item">Salary: <?php echo $employee['salary'] ?></li>
            </ul>
    </div>
<?php } ?>
<!-- <br>
<div class="container">
    <h2>Chi tiet Nhan vien</h2>
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>

            </tr>
            <?php foreach ($data as $employee) { ?>
                <tr>
                    <td><?php echo $employee['id'] ?></td>
                    <td><?php echo $employee['name']  ?></td>
                    <td><?php echo $employee['address']  ?></td>
                    <td><?php echo $employee['salary']  ?></td>

                </tr>
            <?php } ?>
        </tbody>

    </table>
</div> -->
<script src="boostrap/bootstrap.bundle.min.js"></script>
</body>

</html>