<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Calculate String Length</title>
</head>
<body>

<?php
$my_str = 'Welcome to Tutorial Republic';
 
// Calculating and displaying string length
echo "1.Lenght of the string\n";
echo"<br>";
echo strlen($my_str);
echo"<br>";
echo "2.Reverse of the string\n";
echo"<br>";
echo"<br>";
echo strrev($my_str);
echo"<br>";
echo"<br>";
echo "3.Lowercase of the string";
echo"<br>";
echo"<br>";

echo strtolower($my_str);
echo"<br>";
echo"<br>";
echo "4.Uppercase of the string";
echo"<br>";
echo"<br>";
echo strtoupper($my_str);
echo"<br>";
echo"<br>";
echo "5.First string to uppercase";
echo"<br>";
echo"<br>";
echo ucfirst($my_str);

?>

</body>
</html>