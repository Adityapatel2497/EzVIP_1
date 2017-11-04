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
		echo "<script language='javascript'>alert('Update Succesful!!');
							window.location.href='u_accounts.php';
					 		</script>";
}
else{
			echo "<script language='javascript'>alert('Package Succesfully Created!!');
							window.location.href='u_accounts.php';
					 		</script>";
}
} 
	else
	{ 
        header('Location: ../');	
    } 
?>