<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTML Form</title>

	<!-- Include the site stylesheet -->
	<link href="css/01.css" rel="stylesheet" media="all">
</head>
<body>

	<!-- The page header typically contains items such as your site heading, logo and possibly the main site navigation -->
	<!-- ARIA: the landmark role "banner" is set as it is the prime heading or internal title of the page -->
	<header role="banner">
		<h1><abbr title="HyperText Markup Language 5">HTML5</abbr> Form</h1>
		<p>Demonstrating how to create a simple HTML5 user input form.</p>
	</header>

	<!-- If you want to use an element as a wrapper, i.e. for styling only, then <div> is still the element to use -->
	<div class="wrap">

		<!-- The <main> element is used to enclose the main content, i.e. that which contains the central topic of a document -->
		<!-- ARIA: the landmark role "main" is added here as it contains the main content of the document, and it is recommended to add it to the
		<main> element until user agents implement the required role mapping. -->
		<main role="main">
			<p>I would like to get to know you better! Please supply your information in the form below!</p>

			<!-- Create a basic HTML5 form -->
			<form>
				<!-- Use a fieldset for better separation of related form elements -->
				<fieldset name="userinfo">
					<!-- Use the legend tag to provide a label for the entire fieldset. -->
					<legend>User Information</legend>

					<p><label for="first_name">Your first name <input type="text" id="first_name" name="first_name" /></label></p>
					<p><label for="last_name">Your last name <input type="text" id="last_name" name="last_name" /></label></p>

					<!-- In HTML5 the "email" input type may have additional validation on modern browsers, and may enable a different soft keyboard on mobile devices. -->
					<p><label for="email">Your email <input type="email" id="email" name="email" /></label></p>

					<!-- Don't forget a SUBMIT button to actually submit the form data.... but where is it going?? -->
					<p><input type="submit" value="Submit your info" /></p>
				</fieldset>
			</form>
		</main>
	</div>

	<!-- The main page footer can contain items such as copyright and contact information. It can also contain a duplicated navigation of your site which is not usually contained within a <nav> -->
	<!-- ARIA: the landmark role "contentinfo" is added here as it contains metadata that applies to the parent document -->
	<footer role="contentinfo">
		<!-- Copyright information can be contained within the <small> element. The <time> element is used here to indicate that the '2013' is a date -->
		<small>Copyright &copy; <time datetime="2014">2014</time></small>
	</footer>
</body>
</html>