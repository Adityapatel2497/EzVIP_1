<?php
// configuration
include('connect.php');
session_start();
	if(isset($_SESSION['username']))
	{
// new data
$qname = $_POST['qname'];
$cost = $_POST['cost'];
$qdetails = $_POST['qdetails'];
$qafrom = $_POST['qafrom'];
$qato = $_POST['qato'];
$Qno = $_POST['Qno'];
// query
$sql = "UPDATE quotation 
        SET qname='$qname', cost='$cost', qdetails='$qdetails', qafrom='$qafrom', qato='$qato'
		WHERE Qno='$Qno'";
$q = $db->prepare($sql);
$q->execute();
if ($q) {
		echo "<script language='javascript'>alert('Update Succesful!!');
							window.location.href='u_quotaion.php';
					 		</script>";
}
else{
			echo "<script language='javascript'>alert('ERROR!!');
							window.location.href='u_quotaion.php';
					 		</script>";
}
else
	{ 
        header('Location: ../');	
    } 

?>