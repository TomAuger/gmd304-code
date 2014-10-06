<?php
/*
# Logic & Conditionals
*/

// Boolean review
$true = true;
$false = false;

echo $true, "<br>"; // Echoes "1"
echo $false, "<br>"; // Echoes nothing

// Testing
if ( true ){
	echo "Yes, it's true!", "<br>";
}

if ( false ){
	echo "You will never see this message."; // Doesn't execute
}



// Possibly surprisingly other things can be true or false...
// Strings
if ( "something" ){ // true
	echo "I got something", "<br>";
}

if ( "" ){ // false
	echo "This will never show up";
}

// Numbers
if ( 1 ){ //true
	echo "Any number is true", "<br>";
}

if ( 42 ){ //true
	echo "This is very true", "<br>";
}

if ( -1 ){ //true
	echo "Surprisingly, this is true too", "<br>";
}

if ( 0 ){ //false
	echo "Except for 0.";
}


// Arrays and variables
$sum = 10 + 4 + 2 + 6;
if ( $sum ){ // true
	echo "Some sum.", "<br>";
}

$some_array = array( "a", "b", "c" );
if ( $some_array ){ // true
	echo "Yes, there are items in this array", "<br>";
}

$empty_array = array();
if ( $empty_array ){ // false
	echo "No, this array is empty";
}

// Let's look at it another way:

$show_it = true;

if ( $show_it ){
	echo "Yes! (1)", "<br>"; // Executes
}

$show_it = false;

if ( $show_it ){
	echo "Yes! (2)", "<br>"; // Doesn't execute
}

// Negation

if ( ! $show_it ){
	echo "No!", "<br>"; // Executes
}

// Else

if ( $show_it ){
	echo "Showing it", "<br>"; // Doesn't execute
} else {
	echo "Not showing it", "<br>"; // Displays
}

$show_it = true;

if ( $show_it ){
	echo "Showing it", "<br>"; // Displays
} else {
	echo "Not showing it", "<br>"; // Doesn't execute
}

// Evaluating expressions

$number = 5;
if ( $number < 10 ){
	echo "Less than 10!", "<br>";
}

if ( $number > 2 ){
	echo "Greater than 2!", "<br>";
}

if ( $number >= 5 ){
	echo "Greater or equal to 5!", "<br>";
}

if ( $number == 5 ){
	echo "Is equal to 5!", "<br>";
}

if ( $number != 4 ){
	echo "Is not equal to 4!", "<br>";
}

// False assignment
if ( $number = 4 ){ // <-- only a single "=" was used. That's assignment, not equality
	echo "Uh, number is: $number", "<br>";
}

// Yoda conditionals
//if ( 4 = $number ){ // Error - can't assign a variable to a numeric literal
//	echo "What?", "<br>";
//}

// String evaluation
$name = "Tom";
if ( "Tom" == $name ){
	echo "Hello, Tom!", "<br>";
}

if ( "tom" == $name ){
	echo "Hello, lowercase Tom", "<br>";
} else {
	echo "Tom is not equal to tom", "<br>";
}

if ( "tom" == strtolower( $name ) ){
	echo "Hello, tom", "<br>";
}

// Nested conditionals
$number = 5;

if ( $number < 10 ){
	if ( $number < 1 ){
		echo "Number is too small", "<br>";
	} else {
		echo "Number $number is between 1 and 10", "<br>";
	}
} else {
	echo "Number is too big!", "<br>";
}

// Boolean operators
if ( $number > 1 && $number < 10 ){
	echo "Number $number is > 1 and < 10", "<br>";
}

if ( $number == 4 || $number == 5 ){
	echo "Number $number is either 4 or 5", "<br>";
}

// Mixing boolean operators
if ( $number < 5 && $number == 4 || $number == 5 ){
	echo "Yes", "<br>";
}
