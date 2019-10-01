<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #CCCCCC;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h1>Danh sach khach hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>ten</th>
        <th>ngay sinh</th>
        <th>dia chi</th
    </tr>

    <?php
    $customerlist = array(
        "1" => array("ten" => "Bui Van Hoang",
            "ngay sinh" => "26-04-2001",
            "dia chi" => "Quang Tri",
            "anh" => "images/3.jpg"),
        "2" => array("ten" => "Tran Manh Hiep",
            "ngay sinh" => "13-03-1995",
            "dia chi" => "Ha Noi",
            "anh" => "images/1.jpg"),
        "3" => array("ten" => "Hoang Thi Thu Hang",
            "ngay sinh" => "06-12-2000",
            "dia chi" => "Thanh Hoa",
            "anh" => "images/2.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa",
            "ngay sinh" => "1983-08-22",
            "dia chi" => "Hà Tây",
            "anh" => "images/4.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi",
            "ngay sinh" => "1983-08-17",
            "dia chi" => "Hà Nội",
            "anh" => "images/5.jpg")
    );
    foreach ($customerlist as $key => $values) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngay sinh']."</td>";
        echo "<td>".$values['dia chi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
