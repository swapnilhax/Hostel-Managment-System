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
<br>
<br>
<br>
<center><a href="roomupdatenotice.php">Student Record Update </a></center><br>
<center><a href="Updatenotice.php">Update Notice</a></center><br>
<center><a href="roomform.php">Room Alloatment</a></center><br>
<center><a href="roomallocateupdate.php">Update Room Alloatment</a></center><br>
<center><a href="feedbackinsert.php">Complaint List</a></center><br>
<center><a href="roomratedisplay.php">Room Rate</a></center><br>
<center><a href="roomrateupdate.php">Room Rate Update</a></center><br>
<center><a href="noticeform.php">Notice Board</a></center>
<li><a href="index.html">LOGOUT</a></li>
</html>