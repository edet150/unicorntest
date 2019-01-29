<?php

$conn = mysqli_connect('localhost', 'root', '', 'uni');
//check connnection	
		if(!$conn) {
			die("connection failed: ".mysqli_connect);
		}
		
?>