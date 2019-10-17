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
<fieldset>
<h1>Ứng Dụng Chuyển Đổi Tiền Tệ</h1>
<form method="post">
    <input type="text" name="num1" style="width: 100px"/>
    <select name="slc">
        <option value="usd">USD</option>
        <option value="vnđ">VNĐ</option>
    </select>
    <input type="submit" name="submit" value="=" style="width: 50px"/>
</form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $slc = $_POST['slc'];
        if ($slc == "usd") {
            echo $num1 * 23000 . "VND";
        }
        if ($slc == "vnđ") {
            echo $num1 / 23000 . "$";
        }
    }
    ?>
</fieldset>
</body>
</html>


