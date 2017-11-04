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
		echo "<script language='javascript'>alert('Delete Succesful!!');
							window.location.href='d_quotaion.php';
					 		</script>";
}
else{
			echo "<script language='javascript'>alert('ERROR');
							window.location.href='d_quotaion.php';
					 		</script>";
else
	{ 
        header('Location: ../');	
    } 

?>