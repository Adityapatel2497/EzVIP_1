<?php
// configuration
include('connect.php');
session_start();
	if(isset($_SESSION['username']))
	{
// new data
$Qno = $_POST['Qno'];
// query
$sql = "DELETE FROM quotation WHERE Qno='$Qno'";
$q = $db->prepare($sql);
$q->execute();
if ($q) {
		echo '<script language="javascript">';
		echo 'alert("Delete Successful")';
		echo '</script>';
		header("location: d_quotaion.php");
}
else{
			echo '<script language="javascript">';
			echo 'alert("Failed")';
			echo '</script>';
}
else
	{ 
        header('Location: ../');	
    } 

?>