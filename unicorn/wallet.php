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
<body class="">
	<header class="w3-container w3-black">
		<h1>WELCOME TO UNICORN BITCOIN WALLET</h1>
	</header>
	<div class="hel">
	<div class="w3-container w3-half w3-margin-top w3-border ">
		<form class="w3-container w3-card-4 " method="POST" action="wallet.php">
		
			<p>
			
				<input class="w3-input" name="address"  style="width:90%" required>
				<label> address </label>	
			</p>
			
			<p>
				<button class="w3-button w3-section w3-teal w3-ripple" name="submit">
					SUBMIT
				</button>
			</p>
		</form>
	</div>
</div>
<?php 
	
 include 'dbc.php';

		if (isset($_POST['submit'])){
			
	
 include 'dbc.php';
			
			$initial = mysqli_real_escape_string($conn, $_POST['address']);
			$_SESSION['add'] = $initial;
			$inital = "1EzwoHtiXB4iFwedPr49iywjZn2nnekhoj";
		
					$result = mysqli_query($conn,"INSERT INTO wallet(WALLET) VALUES ('$address')");
					if($result){
						header("Location:result.php?$initial");
					}else{
						echo "error";
							}
					}
					
?>
</body>
</html>