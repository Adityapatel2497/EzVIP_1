
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
		echo '<script language="javascript">';
		echo 'alert("Delete Successful")';
		echo '</script>';
header("location: d_accounts.php");
}
else{
			echo '<script language="javascript">';
			echo 'alert("Failed")';
			echo '</script>';
header("location: d_accounts.php");
}
} 
	else
	{ 
        header('Location: ../');	
    } 
?>