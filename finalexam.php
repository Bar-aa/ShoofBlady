<?php
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
$a=5;
$c=&$a;
$b=&$a;
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo '---------------------------------'.'<br>';
$b=8;
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo '---------------------------------'.'<br>';
unset($a);
$a=1;
$c=100;
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo '---------------------------------'.'<br>';
$x= @(57/0);
echo $x;
echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo '---------------------------------'.'<br>';


?>