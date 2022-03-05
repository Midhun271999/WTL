<html>
<head>
<title>PHP Program for Multiplication of two matrices</title>
</head>
<body>
<?php
// Elements of matrix a
$a = array
(
array(1, 0, 8),
array(0, 2, 1),
array(1, 3, 2)
);
//Elements of matrix b
$b = array
(
array(1, 0, 1),
array(2, 3, 1),
array(1, 4, 0)
);
// To calculates the no.of rows and columns of given matrix
$rows = count($a);
$cols = count($b[0]);
$m = count($b);
//First matrix's column and Second matrix's row must be same
if(count($a[0]) != $m)
{
echo "Incompatible matrices";
exit(0);
}
//Performs multiplication of matrices a and b. Store the result in matrix mul
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
$mul[$i][$j] = 0; //Initially mul to be declare with 0
for($k=0; $k < $m; $k++)
{
$mul[$i][$j] += $a[$i][$j] * $b[$i][$j];
}
}
}
echo("First  matrices:</br>");
// To print result in matrix form
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
echo($a[$i][$j] . " " );
echo "   ";
}
echo("</br>");
}
echo("Second matrices:</br>");
// To print result in matrix form
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
echo($b[$i][$j] . " " );
echo "   ";
}
echo("</br>");
}
echo("Multiplication of two matrices:</br>");
// To print result in matrix form
for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
echo($mul[$i][$j] . " " );
echo "   ";
}
echo("</br>");
}
?>
</body>
</html>