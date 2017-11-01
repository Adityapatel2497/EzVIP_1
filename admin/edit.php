<?php
// configuration
include('connect.php');
session_start();
	if(isset($_SESSION['username']))
	{
// new data
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$phone = $_POST['cno'];
$dob = $_POST['dob'];
$id = $_POST['Sno'];
// query
$sql = "UPDATE usertable 
        SET fname='$fname', lname='$lname',email='$email', uname='$uname', dob='$dob', contact='$phone'
		WHERE Sno='$id'";
$q = $db->prepare($sql);
$q->execute();
if ($q) {
		echo '<script language="javascript">';
		echo 'alert("Update Successful")';
		echo '</script>';
header("location: u_accounts.php");
}
else{
			echo '<script language="javascript">';
			echo 'alert("Failed")';
			echo '</script>';
header("location: u_accounts.php");
}
} 
	else
	{ 
        header('Location: ../');	
    } 
?>