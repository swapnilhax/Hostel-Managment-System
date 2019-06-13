<?php
mysql_connect("localhost","root");
mysql_select_db("tycs7");
if(isset($_GET['ID']))
{
	$sql_query="SELECT * FROM notice WHERE ID=".$_GET['ID'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$ID = $_POST['ID'];
	$Date = $_POST['Date'];
	$Class = $_POST['Class'];
	$Subject = $_POST['Subject'];
	$Notices = $_POST['Notices'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE notice SET ID='$ID',Date='$Date',Class='$Class',Subject='$Subject',Notices='$Notices' WHERE ID=".$_GET['ID'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='Updatenotice.php';
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
	header("Location: Updatenotice.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Update Data From MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Notice Update</label>
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
    <td><input type="datetime" name="Date" placeholder="Date" value="<?php echo $fetched_row['Date']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="Class" placeholder="Class" value="<?php echo $fetched_row['Class']; ?>" required /></td>
    </tr>
    <tr>
	<td><input type="text" name="Subject" placeholder="Subject" value="<?php echo $fetched_row['Subject']; ?>" required /></td>
    </tr>   
    <tr> 
	<td><td><input type="text" name="Notices" placeholder="Notices" value="<?php echo $fetched_row['Notices']; ?>" required /></td>
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
    <label>for more tutorials and blog tips visit <a href="http://cleartuts.blogspot.com"> : cleartuts.com</a></label>
    </div>
</div>

</center>
</body>
</html>