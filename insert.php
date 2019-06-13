<?php
include("connection.php");
if(isset($_POST['application_form']))
{
$ID=$_POST['ID'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$Education=$_POST['Education'];
$age=$_POST['age'];
if(empty($name)||empty($email))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into application_form values('$ID','$name','$email','$address','$Education','$age')");
if($query)
{
header("Location:roomrateform.php");
}
else
{
echo "failed";
}
}
}
?>
