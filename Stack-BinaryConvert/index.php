<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert Decimal to Binary</title>
</head>
<body>
<h1>Convert to Binary</h1>
<form action="" method="get">
    <table>
        <tr>
            <th>Decimal number:</th>
            <td><input type="text" name="decimal" placeholder="input number"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Convert"></td>
        </tr>
    </table>
    <h1>Result</h1>
</form>
<?php

use Binary\Stack;

include_once "Stack.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_GET["decimal"];

    $binary = new Stack();
    $arr =  $binary->push($number);
    echo "Decimal number $number covert to binary is: " . implode($arr);
}
?>
</body>
</html>
