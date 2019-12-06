<?php
include "class/DBConnect.php";
include "class/Student.php";
include "class/StudentDB.php";

$studentDB = new StudentDB();
$students = $studentDB->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<table border="1">
    <tr>
        <td><a href="index.php">Come Back</a></td>;
    </tr>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Image</td><br>
    </tr>
    <?php foreach ($students as $key => $student):?>
    <tr>
        <td><?php echo $student->id?></td>
        <td><?php echo $student->name?></td>
        <td><?php echo $student->phone?></td>
        <td><img src="upload/<?php echo $student->image?>" alt="" width="100px"></td>
        <td>
            <a href="Crud/delete.php?id=<?php echo $student->id?>" onclick="return confirm('Bạn có chắc muốn xoá')">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</center>
</body>
</html>