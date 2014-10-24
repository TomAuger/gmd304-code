<?php
$favourite_drinks = array(
	"Jane" => array( "White Russian", "Screwdriver", "Sea Breeze" ),
	"Tom" => array( "White Russian", "Mad Monk", "Cuba Libre" ),
	"James" => array( "Baileyrouskie", "Gin and Tonic", "Sloe Screw" ),
	"Daphne" => array( "Sombrero", "Mad Monk", "Champagne Royale" ),
	"Tanja" => array( "Gin and Tonic", "B-52", "Amber Daiquiri" ),
	"Tim" => array( "Cuba Libre", "Sloe Screw", "B-52", ),
	"Tony" => array( "Greyhound", "Harvey Wallbanger", "Long Island Iced Tea" )
);

function list_friend_drinks( $friend ){
	global $favourite_drinks;

	echo "<ul>";
	foreach ( $favourite_drinks[$friend] as $drink ){
		echo "<li>$drink</li>";
	}
	echo "</ul>";
}

/*
 * One step at a time. Let's start with the OUTER structure, and just create
 * a list of the NAMES of our friends. Then we'll come back and use our
 * FUNCTION to display their drink preferences.
 */
?>

<ul>
	<li><h2>Jane</h2></li>
	<li><h2>Tom</h2></li>
	<li><h2>Etc...</h2></li>
</ul>

<?php
/*
 * Let's iterate through our associative array called `$favourite_drinks`
 * and output the KEY only.
 *
 * REQUIREMENTS: use `foreach ( $favourite_drinks as $name => $drinks )`
 *
 * NOTE: it's (maybe) interesting to note that although we get the `$drinks`
 * array, we're not actually using it in this step. That's okay too.
 */