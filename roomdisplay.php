<?php
include('connection.php');
$sql=mysql_query("select * from room");
while($row=mysql_fetch_array($sql))
{
?>
<html>
<style>
body { background-image:url("images1/book3.jpg");
</style>
<center>
<table border='1'>
<tr>
<th>ID</th>
<th>Room Number</th>
<th>name</th>
<th>Education</th>

</tr>
<tr>
<td>"<?php
echo $row['ID'];
?>"</td>
<td>"<?php
echo $row['roomno'];
?>"</td>
<td>"<?php
echo $row['name'];
?>"</td>
<td>"<?php
echo $row['Education'];
?>"</td>

</tr>
</table>
</center>
<?php
}
?>
</body>

</html>