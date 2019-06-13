<?php session_start();
include("configlogin.php");
if(isset($_POST['tbl_members']))
{
	$userName = secure($_POST['username'], $mysqli);
	$pass =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM tbl_members WHERE username = '$userName' AND pass = '$pass'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['userName'] = $userName;
			header("Location:display.php");
			exit;
		}
		else
		{
			echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
			header("Location:index1.php");
			exit;
		}
	}
}
?>