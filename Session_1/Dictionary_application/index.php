<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 15px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2> dictionary </h2>
    <form action="" method="post">
        <input type="text" name="search" placeholder="Nhap tu tim kiem"/>
        <input type="submit" id="submit" value= "Tim"/>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchword = $_POST["search"];
        $flag = 0;
        $dictionary = array(
            "hello"=>"xin chào",
            "how"=>"thế nào",
            "book"=>"quyển vở",
            "computer"=>"máy tính",
            "people"=>"con người");
        foreach($dictionary as $word => $description) {
            if($word == $searchword){
                echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
                echo "<br/>";
                $flag = 1;
            }
        }
        if($flag == 0){
            echo "Không tìm thấy từ cần tra.";
        }
    }
    ?>
</body>
</html>