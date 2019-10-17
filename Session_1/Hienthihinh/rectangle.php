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
<form action="" method="post">
    <div class="login">
        <h2>Vẽ Hình</h2>
        <input type="text" name="numbers_one" placeholder="numbers_one"><br>
        <input type="text" name="numbers_two" placeholder="numbers_two"><br>
        <button type="submit">Vẽ</button>
    </div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $numbersone = $_POST["numbers_one"];
    $numberstwo = $_POST["numbers_two"];
    for ($i = 0 ;$i <= $numbersone ; $i++ ) {
        echo "<br>";
        for ($j = 0 ; $j <= $numberstwo ; $j++) {
            echo "*" ." ";
        }
    }
}
?>
</body>
</html>