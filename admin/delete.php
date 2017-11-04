
<?php
// configuration
include('connect.php');
session_start();
	if(isset($_SESSION['username']))
	{
// new data
$id = $_POST['Sno'];
// query
$sql = "DELETE FROM usertable WHERE Sno='$id'";
$q = $db->prepare($sql);
$q->execute();
if ($q) {
	echo "<script language='javascript'>alert('Delete` Succesful!!');
							window.location.href='d_accounts.php';
					 		</script>";
}
else{
			echo "<script language='javascript'>alert('ERROR!!');
							window.location.href='d_accounts.php';
					 		</script>";
}
} 
	else
	{ 
        header('Location: ../');	
    } 
?>