<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Caculator</h2>
        First operand: <input type="number" name="number1" size="30"><br>
        <select name="operator">
            <option value="+">Cong</option>
            <option value="-">Tru</option>
            <option value="*">Nhan</option>
            <option value="/">Chia</option>
        </select><br>
        Second operand: <input type="number" name="number2" size="30"><br>
        <input type="submit" value="Caculator"/>

    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operator = $_POST["operator"];
        if($operator === "+"){
            echo $number1 + $number2;
        }
        else if($operator === "-"){
            echo $number1 - $number2;
        }
        else if($operator === "/"){
            if($number2 === "0") {
                echo "loi";
            }
            else{
                echo $number1/($number2);
            }
        }
        else if($operator === "*"){
            echo $number1 * $number2;
        }
    }
    ?>
</form>
</body>
</html>