<!DOCTYPE html>
<html>

<head>
    <title>PHP String Manipulation</title>

    <style>

        body{
            font-family: Arial;
            background-color: lightgray;
            padding: 20px;
        }

        .box{
            background-color: white;
            padding: 20px;
            width: 400px;
            border-radius: 10px;
        }

    </style>

</head>

<body>

<div class="box">

<?php

// Declare string
$str = "Web Development";

echo "<h2>Original String:</h2>";
echo $str;

echo "<hr>";


// Find string length
echo "<h3>String Length:</h3>";
echo strlen($str);

echo "<hr>";


// Reverse string
echo "<h3>Reversed String:</h3>";
echo strrev($str);

echo "<hr>";


// Extract substring
echo "<h3>Substring:</h3>";
echo substr($str, 0, 3);

?>

</div>

</body>

</html>