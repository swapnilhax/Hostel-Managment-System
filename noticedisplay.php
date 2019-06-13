<?php
include('connection.php');
$sql=mysql_query("select * from Notice");
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
<th>Date</th>
<th>Class</th>
<th>Subject</th>
<th>Notice</th>
</tr>
<tr>
<td>"<?php
echo $row['ID'];
?>"</td>
<td>"<?php
echo $row['Date'];
?>"</td>
<td>"<?php
echo $row['Class'];
?>"</td>
<td>"<?php
echo $row['Subject'];
?>"</td>
<td>"<?php
echo $row['Notices'];
?>"</td>
</tr>
</table>
</center>
<?php
}
?>
</body>
<br>
<br>
<br>
</html>