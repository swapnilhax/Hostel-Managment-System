<?php
mysql_connect("localhost","root");
mysql_select_db("tycs7");
if(isset($_GET['ID']))
{
	$sql_query="SELECT * FROM application_form WHERE ID=".$_GET['ID'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$ID = $_POST['ID'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$Education = $_POST['Education'];
	$age = $_POST['age'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE application_form SET ID='$ID',name='$name',email='$email',address='$address',Education='$Education',age='$age' WHERE ID=".$_GET['ID'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='roomupdatenotice.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: roomupdatenotice.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Student Record Update</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Record Update</label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="ID" placeholder="ID" value="<?php echo $fetched_row['ID']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="name" placeholder="name" value="<?php echo $fetched_row['name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
    <tr>
	<td><input type="text" name="address" placeholder="address" value="<?php echo $fetched_row['address']; ?>" required /></td>
    </tr>   
    <tr> 
	<td><td><input type="text" name="Education" placeholder="Education" value="<?php echo $fetched_row['Education']; ?>" required /></td>
    </tr>
	<tr>
	<td><td><input type="text" name="age" placeholder="age" value="<?php echo $fetched_row['age']; ?>" required /></td>
	</tr>
	<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

<div id="footer">
	<div id="content">
    <hr /><br/>
    
    </div>
</div>

</center>
</body>
</html>