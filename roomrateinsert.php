<?php
include("connection.php");
if(isset($_POST['roomrate']))
{
$ID=$_POST['ID'];
$name=$_POST['name'];
$room=$_POST['room'];

if(empty($name))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into roomrate values('$ID','$name','$room')");
if($query)
{
header("Location:contact.html");
}
else
{
echo "failed";
}
}
}
?>
