<?php
if (($_SERVER["REQUEST_METHOD"]) == "POST") {
    include_once "class/DBConnect.php";
    include_once "class/Student.php";
    include_once "class/StudentDB.php";
    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $image = $_FILES["image"]["name"];
    $target = "upload/". basename($image);
    
    $student = new Student($name, $phone, $image);
    $manager = new StudentDB();
    $manager->addStudent($student);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target);
}

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
<form action="" method="post" enctype="multipart/form-data">
    <table>
    name:
    <input type="text" name="name"><br>
    phone:
    <input type="text" name="phone"><br>
    <input type="file" name="image"><br>
    <input type="submit" value="upload"><br>
        <tr>
            <td><a href="list.php">List</a></td>
        </tr>
    </table>
</form>
</center>
</body>
</html>
