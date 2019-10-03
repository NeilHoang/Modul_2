<center>
<?php
    $a = '';
    $b = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["num1"];
        $b = $_POST["num2"];
        $calculator = $_POST["calculator"];
    }

    function checkNumber($a, $b)
    {
        if ($b == 0) ;
        {
            throw new Exception("error");
        }
        return true;
    }

    function Calculator($a, $b, $calculator)
    {
        switch ($calculator) {
            case "PLUS":
                return $a + $b;
                break;
            case "MINUS":
                return $a - $b;
                break;
            case "MULTIPLICATION":
                return $a * $b;
                break;
            case "DIVISION":
                try {
                    checkNumber($a, $b);
                    return $a / $b;
                } catch (Exception $e) {
                    echo 'Message: ' . $e->getMessage();
                }
                break;
        }
    }
    echo Calculator($a, $b, $calculator);
    ?>
</center>
