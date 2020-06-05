<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "project2";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); 

$sql="select * from st_info";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);

session_start();

if(@$_SESSION['st_user'])
{
	header("location: students/home.php");
}
 include "setting/config.php";
if(isset($_POST['student_signin']))
{
 $st_username = $_POST['st_username'];
	
	$st_password = $_POST['st_password']; 
	
	if($st_username=="" || $st_password=="")
	{
      echo "<script>alert('Please Fill Properly');</script>";
	}
	 else
	 {
	$go = $ravi->student_login_check($st_username,$st_password);
	if($go==1)
	{
		$_SESSION['st_user'] = $st_username;
		$_SESSION['st_password'] = $st_password;
		
		header("location: students/index.php?");
	}
	else
	{
		echo "<script>alert('login failed');</script>";
		header("Location: index.php");
		exit();
	}
	 }
	
}

?>