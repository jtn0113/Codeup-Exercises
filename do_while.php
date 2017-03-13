<?php 
$i = 100;
do {
echo $i . PHP_EOL;
 $i -= 5;
} while ($i >= -10);

$x = 2;
do {
echo $x . PHP_EOL;
$x *= $x;
} while($x < 1000000);

?>