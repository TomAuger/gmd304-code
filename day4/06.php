<?php
/*
= Loops
*/

// For loop
for ( $i = 0; $i < 10; $i++ ){
	echo $i, "<br>";
}

echo "<hr>";

// Foreach loop
$names = array( "Tom", "Joe", "Tim", "Amy", "Pat", "Don" );
foreach ( $names as $name ){
	echo $name, "<br>";
}

echo "<hr>";

// Foreach associative array loop
$ages = array(
	"Tom" => 43,
	"Joe" => 53,
	"Tim" => 22,
	"Amy" => 27,
	"Pat" => 24,
	"Don" => 22
);
foreach( $ages as $name => $age ){
	echo "$name is $age years old", "<br>";
}

echo "<hr>";

// While loop
$i = 1;
while ( $i < 10 ){
	echo $i, "<br>";
	$i++;
}