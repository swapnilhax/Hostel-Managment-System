<?php
include("connection.php");
if(isset($_POST['Notice']))
{
$ID=$_POST['ID'];
$Date=$_POST['Date'];
$Class=$_POST['Class'];
$Subject=$_POST['Subject'];
$Notices=$_POST['Notices'];
if(empty($Subject)||empty($Notices))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into Notice values('$ID','$Date','$Class','$Subject','$Notices')");
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
