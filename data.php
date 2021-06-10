<?php
$database = "clientsdb";
$username = "root";
$password = "";
$url = "127.0.0.1";

$con = mysqli_connect($url, $username , $password, $database);
if(!$con)
{
die ("Connection failed :".$con->connect_error);
}
$sql = "SELECT * FROM clientsdetails";
$result = mysqli_query($con, $sql);
$rows = array();
if (mysqli_num_rows($result)>0)
{
while($r = mysqli_fetch_assoc($result))
{
array_push($rows, $r);
}
print json_encode($rows);
}
else
{ echo"No data";
}
mysqli_close($con);
?>
