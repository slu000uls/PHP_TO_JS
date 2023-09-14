<?php
//include class
include "./php_to_js.php";

//we create object for this class.
$php_to_js = new php_to_js();
//we enter the Variable and put value inside it.
$php_to_js->displayVariable("fromphp","this value comes from php");

//you can use this Variable in js like this :
//console.log(fromphp);