<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
    <h1>Product Discount Calculator</h1>
    <form action="" method="post">
        Product Description: <input type="text" name="description"><br>
        List Price: <input type="text" name="price"><br>
        Discount Percent: <input type="text" name="percent"><br>
        <button type="submit">Calculate Discount</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product = $_POST["description"];
        $price = $_POST["price"];
        $discount = $_POST["percent"];

        $calculate = ( $price / 100 ) * $discount * 0.1;
//        var_dump($calculate);
        echo "Discount Amount: " . $calculate."%";
    }
    ?>
</div>
</body>
</html>