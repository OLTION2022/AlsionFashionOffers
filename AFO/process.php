<!DOCTYPE html>
<html lang="en">
<head>	
<title>Alsion Fashion Offers: Check Out-Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Alsion Fashion Offers: Check Out Form">
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
<div id="wrapper">
<header>
    <img src="OAF.jpg" alt="OAF">
	<h1>Alsion Fashion Offers</h1>
    <h2>Your platform for the latest in-fashion and trending products!</h2>
    <br class="clearright">
</header>
<nav>
    <div><a href="index.html">Home</a></div>
    <div><a href="aboutUs.html">About Us</a></div>
    <div><a href="category.html">Category</a></div>
    <div><a href="cart.html">Cart</a></div>
    <div><a href="#">Search</a></div>
    <div><a href="contactUS.html">Contact Us</a></div>
</nav>
<main>
    <div>
	    <h2>Thank you for contacting Alsion Fashion Offers!</h2>
        <h2>One of our team members will reach out within 24 hours to assist you.</h2>
        <table>
            <tr>
                <th>Form name</th>
                <th>Form value</th>
            </tr>
<?php

foreach ($_POST as $n => $v) {

    echo "<tr>
                <th>$n</th>
                <th>$v</th>
            </tr>";
}

?>
        </table>
    </div>
</main>
<footer>
	<p>Oltion Fonija&copy;2022</p>
</footer>
</div><!-- end of wrapper -->
</body>
</html>