<?php
include("connection.php");
if(isset($_POST['room']))
{
$ID=$_POST['ID'];
$rooomno=$_POST['roomno'];
$name=$_POST['name'];
$Education=$_POST['Education'];
if(empty($name)||empty($Education))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into room values('$ID','$roomno','$name','$Education')");
if($query)
{
header("Location:index.html");
}
else
{
echo "failed";
}
}
}
?>
