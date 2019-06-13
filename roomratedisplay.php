<?php
include('connection.php');
$sql=mysql_query("select * from roomrate");
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
<th>name</th>
<th>room</th>
</tr>
<tr>
<td>"<?php
echo $row['ID'];
?>"</td>
<td>"<?php
echo $row['name'];
?>"</td>
<td>"<?php
echo $row['room'];
?>"</td>


</tr>
</table>
<?php
}
?>
</body>
</center>
</html>