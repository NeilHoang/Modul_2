<!doctype html>
<html lang="en">
<head>
    <title>TÍNH TUỔI CỦA BẠN</title>
    <style>
        body {
            background: #80faff;
        }
        .container {
            margin-top: 200px;
            text-align: center;
        }
        .myButton {
            width: 180px;
            height: 50px;
            border: none;
            border-radius: 6px;
            background-color: white;
            font-size: 16px;
            text-align: center;
        }
        .myButtons {
            width: 70px;
            height: 50px;
            border: none;
            border-radius: 6px;
            background-color: white;
            font-size: 16px;
            text-align: center;
            font-family: 'Beirut';
        }
        .title, .myButton {
            font-family: 'Berkshire Swash', cursive;
            color: midnightblue;
        }
      
    </style>
</head>
<body>
<center>
<form action="" method="get">
    <div class="container">
        <h1 class="title">Năm Sinh</h1>
        <h3>Nhập năm sinh: <input type="text" class="myButton" placeholder="dd-mm-yyy" name="birthday">
    <input type="submit" class="myButtons" value="Tính"><br><br>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET")
        $dateOfBirth = $_GET["birthday"];
    //$dateOfBirth = "13-08-1995";
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    echo 'Tuổi của bạn là -> ' . $diff->format('%y') . "<br>";
    echo 'Số ngày bạn đã tồn tại 😌😌 -> ' . $diff->format('%R%a days');
    ?>
</form>
</center>
</body>
</html>

