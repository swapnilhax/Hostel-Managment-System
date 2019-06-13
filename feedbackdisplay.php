<?php
include("connection.php");
if(isset($_POST['feedback']))
{
$ID=$_POST['ID'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
if(empty($name)||empty($email))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into feedback values('$ID','$name','$email','$subject','$message')");
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
