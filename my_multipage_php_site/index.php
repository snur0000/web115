<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>Sabby's Custom Ink</title>
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "brand.css" />
</head>
<body>

<div id = "logo">
<h1>Sabby's Custom Ink</h1>
<br>
<h2>you think it, we print it</h2>

	<a href = "index.php"  >
		
	</a>
	<br />
	<div id = "navlinks">
	<a href = "?p=home.php">home</a>&diams; 
	<a href = "?p=alpha.php">about</a>&diams;
	<a href = "?p=bravo.php">services</a>&diams; 
	<a href = "?p=charlie.php">portfolio</a>&diams;
	<a href = "?p=delta.php">gallery</a>&diams;
	<a href = "?p=echo.php">contact</a>
	</div>
</div>
<br>
<div id = "wholepage">
<!-- dynamic content goes here -->

<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "home.php"; }
	include($sPage);
?>

<p><br>
</div>
<hr />

<footer>
<a href="http://validator.w3.org/check?uri=referer"> <img src ="images/valid_html5/valid_html5.gif" alt = "html5"></a> 
<a href="http://jigsaw.w3.org/css-validator/check/referer"> <img src ="images/valid_html5/vcss-blue.gif" alt= "css"></a>
</footer>

</body>
</html>