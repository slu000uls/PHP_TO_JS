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
?>