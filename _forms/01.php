<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTML Bones</title>

	<!-- Include the site stylesheet -->
	<link href="css/01.css" rel="stylesheet" media="all">
</head>
<body>

	<!-- The page header typically contains items such as your site heading, logo and possibly the main site navigation -->
	<!-- ARIA: the landmark role "banner" is set as it is the prime heading or internal title of the page -->
	<header role="banner">
		<h1><abbr title="HyperText Markup Language 5">HTML5</abbr> Bones</h1>
		<p>(From Ian Devlin's "Bones" minimal template on <a href="https://github.com/iandevlin/html5bones.git">GitHub</a>)</p>
	</header>

	<!-- The <main> element is used to enclose the main content, i.e. that which contains the central topic of a document -->
	<!-- ARIA: the landmark role "main" is added here as it contains the main content of the document, and it is recommended to add it to the
	<main> element until user agents implement the required role mapping. -->
	<main role="main">
		<p>Main content goes here...</p>
	</main>

	<!-- The main page footer can contain items such as copyright and contact information. It can also contain a duplicated navigation of your site which is not usually contained within a <nav> -->
	<!-- ARIA: the landmark role "contentinfo" is added here as it contains metadata that applies to the parent document -->
	<footer role="contentinfo">
		<!-- Copyright information can be contained within the <small> element. The <time> element is used here to indicate that the '2013' is a date -->
		<small>Copyright &copy; <time datetime="2014">2014</time></small>
	</footer>
</body>
</html>