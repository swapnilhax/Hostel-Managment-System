<h2><center>Hostel Registration Records </center></h2>
<?php
include('connection.php');
$sql=mysql_query("select * from application_form");
while($row=mysql_fetch_array($sql))
{
?>

<html>
<style>
body { background-image:url("images1/book3.jpg");
</style>
<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Education</th>
<th>Age</th>
</tr>
<tr>
<td>"<?php
echo $row['ID'];
?>"</td>
<td>"<?php
echo $row['name'];
?>"</td>
<td>"<?php
echo $row['email'];
?>"</td>
<td>"<?php
echo $row['address'];
?>"</td>
<td>"<?php
echo $row['Education'];
?>"</td>
<td>"<?php
echo $row['age'];
?>"</td>
</tr>
</table>
<?php
}
?>
</body>