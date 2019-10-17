<html><head>
    <title>Product Discount Calculator</title>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description:<?php echo  $_POST["description"] ?> </label>
    <span></span><br>
    <label>Price: <?php echo  $_POST["price"] ?>$</label>
    <span></span><br>
    <label>Discount Percent:<?php echo  $_POST["discount_percent"] ?> $</label>
    <span></span><br>
    <label>Discount Amount: <?php echo  $_POST["price"] * $_POST["discount_percent"]*0.01*0.1  ?>$</label>
    <span></span><br>
    <label>Discount Price:<?php echo  $_POST["price"] - $_POST["price"] * $_POST["discount_percent"]*0.01*0.1?>$ </label>
    <span></span><br>
</div>

</body></html>