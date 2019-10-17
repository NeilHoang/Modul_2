<?php
include_once "CLASS/studentManager.php";
include_once "CLASS/student.php";
include_once "CLASS/DBConnect.php";

$c0819h2 = new studentManager();
$listStudent = $c0819h2->getAllStudent();
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
<form action="CRUD/insert.php" method="get">
    <center>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add"></td>
            </tr>
        </table>
    <table border="5">
        <tr>
            <td>Số Thứ Tự</td>
            <td>Tên Sinh Viên</td>
            <td>Số Điện Thoại</td>
        </tr>
        <?php foreach ($listStudent as $key=>$value) {?>
        <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo $value->name?></td>
            <td><?php echo $value->phone?></td>
            <td>
                <a href="CRUD/deletee.php?id=<?php echo $value->id?>" onclick="return confirm('Bạn có chắc muốn xoá')">delete</a>
            </td>
            <td>
                <a href="CRUD/edit.php?id=<?php echo $value->id?>" onclick="return confirm('Bạn có chắc muốn sửa')">edit</a>
            </td>
        </tr>
        <?php }?>
    </table>
    </center>
</form>
</body>
</html>
