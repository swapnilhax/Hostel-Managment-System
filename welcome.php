<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo'<h1>WELCOME ' . $_SESSION['userName'] . '</h1>';
		
		echo'<br> <h1> <a href="logout.php">LOGOUT</a> </h1>';
	 } 
	 else
	 {
	 	echo 'You are not logged In <br>';
		echo'<a href="index1.php">LOGIN</a>';
		
	 }
?>