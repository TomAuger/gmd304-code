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

echo "<ul>";

foreach ( $favourite_drinks as $name => $drinks ){
	echo "<li>";
	echo "<h2>$name</h2>";
	echo "</li>";
}
echo "</ul>";

/*
 * Awesome, now we are listing each person's name.
 * We ALSO have an array of all their favourite drinks
 * in the `$drinks` variable, which we're NOT using, but we need to declare
 * in order to get the KEY in our `foreach` loop.
 *
 * Now, we need to add the SECOND level. For each name, we want to create a
 * list (think: <ul><li>...) of their drinks. Refer back to the HTML
 * structure below.
 *
 * The GOOD NEWS is that our FUNCTION already creates this structure. So
 * it's only a matter of using our function at the right place (and
 * passing it the right argument) in order to get the output we desire!
 *
 * CHALLENGE: where do you put the function call in order to achieve
 * the HTML structure shown below?
 */
?>
<hr />

<ul>
	<li>
		<h2>Jane</h2>
		<ul>
			<li>White Russian</li>
			<li>Screwdriver</li>
			<li>Sea Breeze</li>
		</ul>
	</li>
	<li>
		<h2>Tom</h2>
		<ul>
			<li>White Russian</li>
			<li>Mad Monk</li>
			<li>Cuba Libre</li>
		</ul>
	</li>
	<li>
		<h2>Etc...</h2>
	</li>
</ul>