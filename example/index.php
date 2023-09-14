
<?php
//in here we have an class.
class php_to_js {
    public function displayVariable($variable_name,$value) {
        echo "<script>";
        echo "var $variable_name = " . json_encode($value) . ";";
        // echo "console.log(myVariable);";
        echo "</script>";
    }
}
//we create object for this class.
$php_to_js = new php_to_js();
//we enter the Variable and put value inside it.
$php_to_js->displayVariable("fromphp","this value its from php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To Js</title>
</head>
<body>
    <script src="main.js"></script>
</body>
</html>