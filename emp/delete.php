
<?php
// configuration
include('connect.php');
session_start();
	if(isset($_SESSION['username']))
	{
// new data
$pno = $_POST['pno'];
// query
$sql = "DELETE FROM package WHERE pno='$pno'";
$q = $db->prepare($sql);
$q->execute();
if ($q) {
		echo "<script language='javascript'>alert('Package Deleted');
				window.location.href='d_package.php';
				 </script>";
}
else{
			echo "<script language='javascript'>alert('Error: Package Deleted');
				window.location.href='d_package.php';
				 </script>";
}
} 
	else
	{ 
        header('Location: ../');	
    } 
?>