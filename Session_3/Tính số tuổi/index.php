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
            
            // Kiểm tra, nếu biến birthday đuợc khởi tạo thì hiển thị kết quả ra màn hình
            //......
            // Nếu biến bỉthday chưa đuợc khởi tạo và có giá trị là NULL thì không hiển thị kêt qủa ra màn hình
            
            if (isset($_GET["birthday"])) {
                $dateOfBirth = $_GET["birthday"];
//            var_dump(isset($_GET["birthday"]));
                $today = date("Y-m-d");
                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                echo 'Tuổi của bạn là -> ' . $diff->format('%y') . "<br>";
                echo 'Số ngày bạn đã tồn tại 😌😌 -> ' . $diff->format('%R%a days');
            } else {
                echo "Không được để trống ô 'Nhập năm sinh' ";
            }
        ?>
    </form>
</center>
</body>
</html>

