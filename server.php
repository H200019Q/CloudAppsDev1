<?php
$fname=$_POST['fname'];
$surname=$_POST['surname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['gender'];
$province=$_POST['province'];
$database="clientsdb";


$servername="localhost";
$username="root";
$password="";
 
$con=new mysqli($servername,$username,$password, $database);
//check connection
if(!$con)
{
	die('could not connect:'.mysqli_error());
}

$sql= "INSERT INTO clientsdetails (Firstname, Lastname, age, gender, email, province) VALUES ('$fname', '$surname', '$age', '$gender', '$email', '$province')";
if(mysqli_query($con, $sql))
{
	echo "Records added successfuly.";
}
else {  
		echo "ERROR:  Could not  add record". mysqli_error($con);
}
mysqli_close($con);

?>
