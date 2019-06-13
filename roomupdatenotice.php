<?php
mysql_connect("localhost","root");
mysql_select_db("tycs7");
$sql_query="SELECT * FROM application_form";
$result_set=mysql_query($sql_query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Record's</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Record's </label>
    </div>
</div>
<div id="body">
	<div id="content">
    <table align="center" width="100%">
    <tr>
    <th>ID</th>
    <th>name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Education</th>
	<th>Age</th>
    </tr>
    <?php
	if(mysql_num_rows($result_set)>0)
	{
		while($row=mysql_fetch_row($result_set))
		{
			?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
	        <td><?php echo $row[5]; ?></td>		
            <td align="center"><a href="roomedit_data.php?ID=<?php echo $row[0]; ?>"><img src="b_edit.png" alt="Edit" /></a></td>
            </tr>
            <?php
		}
	}
	else
	{
		?>
        <tr>
        <th colspan="3">There's No data found !!!</th>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>

<div id="footer">
	<div id="content">
    <hr /><br/>
    <label>Online Hostel Management <a href="http://SwapnilCrypto.coolpage.biz">Site</a></label>
	
	<p><a href="../project/index.html">Home Page</a></p>
	
    </div>
</div>

</center>
</body>
</html>