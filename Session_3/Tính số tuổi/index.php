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
        }

        .title, .myButton {
            font-family: 'Berkshire Swash', cursive;
            color: #ff0b20;
        }

    </style>
</head>
<body>
<center>
    <form action="" method="get">
        <div class="container">
            <h1 class="title">Năm Sinh</h1>
            <h3>Nhập năm sinh: <input type="date" class="myButton" placeholder="dd-mm-yyy" name="birthday">
                <input type="submit" class="myButtons" value="Tính"><br><br>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET")
            
            // Kiểm tra, nếu biến birthday đuợc khởi tạo thì hiển thị kết quả ra màn hình
            //......
            // Nếu biến birthday chưa đuợc khởi tạo và có giá trị là NULL thì không hiển thị kết qủa ra màn hình
            
            if (isset($_GET["birthday"])) {
                $dateOfBirth = $_GET["birthday"];
//            var_dump(isset($_GET["birthday"]));
                $today = date("Y-m-d");
                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                $day = $diff->format("%a");
                echo 'Tuổi của bạn là -> ' . $diff->format('%y') . "<br><br>";
                echo "Số tuần bạn đã tồn tại là -> " . floor($day / 7) . "<br>";
                echo 'Số ngày bạn đã tồn tại 😌😌 -> ' . $day . "<br>";
            } else {
                echo "Không được để trống ô 'Nhập năm sinh' ";
            }
        ?>
    </form>
</center>
</body>
</html>r