<?php
include_once "Class/DBConnect.php";
include_once "Class/StudentManager.php";
include_once "Class/Student.php";

$students = new StudentManager();
$listStudent = $students->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="CRUD/add.php" method="get">
    <center>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add"></td>
            </tr>
        </table>
        <table border="1">
            <tr>
                <td>
                    Stt
                </td>
                <td>
                    name
                </td>
                <td>
                    phone
                </td>
            </tr>
            <?php foreach ($listStudent as $key => $value) { ?>
                <tr>
                    <td>
                        <?php echo ++$key ?>
                    </td>
                    <td>
                        <?php echo $value->name ?>
                    </td>
                    <td>
                        <?php echo $value->age ?>
                    </td>
                    <td>
                        <a href="CRUD/delete.php?id=<?php echo $value->id ?>" onclick="return confirm('hgfddgfbdff')">delete</a>
                    </td>
                    <td>
                        <a href="CRUD/formEdit.php?id=<?php echo $value->id ?>"
                           onclick="return confirm('rhegfadASDGD')">edit</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </center>
</form>
</body>
</html>
