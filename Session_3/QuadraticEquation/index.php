<?php
include "quadracticEquation.php";
$demo = new QuadraticEquation(1, 1, 1);
include "getvalue.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .formInput input {
            width: 30px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form action="" method="get" class="formInput">
    <h3>Giải Phương Trình Bậc 2 ax<sup>2</sup> + bx + c = 0</h3>
    Nhập các hệ số:
    a = <input type="text" name="num1" size="5"/>
    b = <input type="text" name="num2" size="5"/>
    c = <input type="text" name="num3" size="5"/>
    <input type="submit" name="Giải" value="Giải Phương Trình"/>
</form><br><br>
<?php echo $demo->result(); ?>
</body>
</html>
