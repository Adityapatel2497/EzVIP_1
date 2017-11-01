<?php
// configuration
include('connect.php');
session_start();
	if(isset($_SESSION['username']))
	{
// new data
	$pname = $_POST['pname'];
	$club = $_POST['club'];
	$artist = $_POST['artist'];
	$com = $_POST['com'];
	$total = $_POST['total'];
	$pno = $_POST['pno'];
// query
$sql = "UPDATE package 
        SET pname='$pname', club='$club',artist='$artist', com='$com', total='$total'
		WHERE pno='$pno'";
$q = $db->prepare($sql);
$q->execute();
if ($q) {
		echo "<script language='javascript'>alert('Package Succesfully Updated!!');
							window.location.href='e_package.php';
					 		</script>";
}
else{
			echo "<script language='javascript'>alert('Package Upadation Unsuccesfully!!');
							window.location.href='e_package.php';
					 		</script>";
}
} 
	else
	{ 
        header('Location: ../');	
    } 
?>