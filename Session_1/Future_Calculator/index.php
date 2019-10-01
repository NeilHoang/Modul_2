<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
    <h1>Future Value Calculator</h1>
    <form action="" method="post">
    Inventment Amount: <input type="text" name="inventment"><br>
    Yearly Interest Rate: <input type="text" name="rate"><br>
    Number of Years: <input type="text" name="year"><br>
    <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["inventment"];
        $rate = $_POST["rate"];
        $year = $_POST["year"];

        $calculate = $amount + ($amount * ($rate / 100));
        echo "Future: " .$calculate;
    }
    ?>
</body>
</html>