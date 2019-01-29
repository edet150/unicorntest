<!DOCTYPE html>
<?PHP 
session_start();
?>
<html lang="en">
<head>
<title> UNICORN BTC WALLET</title>
<meta name="viewport"
	content="width=device-width,
	initial-scale=1">
<link rel="stylesheet"
href="w3.css"/>

<link rel="stylesheet"
href="css1/bootstrap.css"/>
<script src="js/bootstrap.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.hel{

		padding-left: 250px;
	}
</style>

</head>
<body>
<?php 
	
	if ($_SESSION['add']) {
	include 'file.php';
	}
 ?>

</body>
</html>