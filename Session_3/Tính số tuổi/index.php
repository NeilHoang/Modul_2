<!doctype html>
<html lang="en">
<head>
    <title>TÍNH TUỔI CỦA BẠN</title>
</head>
<body>
<form action="" method="get">
    Nhập năm sinh: <input type="text" placeholder="dd-mm-yyy" name="birthday">
    <input type="submit" value="Tính"><br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET")
        $dateOfBirth = $_GET["birthday"];
    //$dateOfBirth = "13-08-1995";
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    echo 'Tuổi của bạn là: ' . $diff->format('%y') . "<br>";
    echo 'Số ngày bạn đã tồn tại 😌😌: ' . $diff->format('%R%a days');
    ?>

</form>
</body>
</html>

