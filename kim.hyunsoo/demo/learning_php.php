<?php

// hello;
// phpinfo ();

echo "<h1>Hello World<h1>";
echo "<div>Goodbye World</div>";

$a = 5;

//String Interpolation
echo "<div> I have $a things</div>";
echo '<div> I have $a things</div>';


// Number
// Integer
$b = 15;
// Float
$b = 0.576;

$b = 10;

// String
$name = "Yerguy";
$name = 'Hamilton';

// Boolean
$isOn = true;

// function, class, object

// Math

echo (5+4)*2;

// Concatenation

echo "<div>$b + $a = " . ($b+$a) . "</div>";
echo "<div>b + a = " . "c</div>";

// Name
$firstname = "Hyunsoo";
$lastname = 'Kim';

$fullname = "Hyunsoo Kim"
?>

<hr>
<div>This is my name</div>
<div>

<?php

$firstname = 'Hyunsoo';
$lastname = 'Kim' ;
$fullname = $firstname. " " .$lastname;

echo $fullname;

?>	

</div>

<hr>

<?php

// Superglobal

// ?name=Joey

echo "<div><a href='?name=Joey'>Joey</a>My name is {$_GET['name']}</div>";

phpinfo()

//Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"];

echo $colors[1];

echo "
	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]
	";

echo count($colors);

?>

<div style="color:<?= $colors[1]?>">
	This text is green
	
</div>

<?php

// Associative Array
$colorsAssociative = [
  "red" => "#f00",
  "green" => "#0f0",
  "blue" => "#00f",
];

echo $colorsAssociative['red'];

?>

<hr>

<?php

// Casting
$c = "$a";
$d = $c*1; 

$colorsObject = (object)$colorsAssociative;

// echo $colorsObject;

echo "<hr>";

//Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssociative['red']."<br>";


// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject ->{$colors[0]}."<br>";

?>

<hr>

<?php

print_r($colors);

