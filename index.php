<?php
include_once('./connect.php');

$query = 'select * from employee';
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br>
    <div class="head">
        <h2 class="text-success">Quan ly nhan vien</h2>
        <a href="./create.php"><input type="submit" name="submit" class="btn btn-primary " value="+"></a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Details</th>
                <th colspan="2">
                    Action
                </th>
            </tr>
        </thead>
        <?php foreach ($data as $employee) { ?>
            <tbody>
                <tr>
                    <td><?php echo $employee['id']  ?></td>
                    <td><?php echo $employee['name']  ?></td>
                    <td><?php echo $employee['address']  ?></td>
                    <td><?php echo $employee['salary']  ?></td>
                    <td><?php echo "<a href='./view.php?id= $employee[id]'>Chi tiet</a> " ?></td>
                    <td><a class="btn btn-danger" href="./delete.php?del=<?php echo $employee['id'] ?>">Delete</a></td>
                </tr>

            </tbody>
        <?php } ?>
    </table>



    <script src="boostrap/bootstrap.bundle.min.js"></script>
</body>

</html>