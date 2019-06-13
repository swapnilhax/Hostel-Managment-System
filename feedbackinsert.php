<?php
include('connection.php');
$sql=mysql_query("select * from feedback");
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
<th>email</th>
<th>subject</th>
<th>message</th>
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
echo $row['subject'];
?>"</td>
<td>"<?php
echo $row['message'];
?>"</td>
</tr>
</table>
<?php
}
?>
</body>
</center>
</html>