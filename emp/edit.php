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
	$sd = $_POST['sd'];
	$ld = $_POST['ld'];
// query
$sql = "UPDATE package 
        SET pname='$pname',short_desc = '$sd',long_desc= '$ld',club='$club',artist='$artist', com='$com', com_t =
        (((SELECT rate as club from vendor WHERE vname='$club')+(SELECT rate as artist FROM vendor WHERE vname='$artist'))*($com/100)),total = 	((((SELECT rate as club from vendor WHERE vname='$club')+(SELECT rate as artist FROM vendor WHERE vname='$artist'))*($com/100))+((SELECT rate as club from vendor WHERE vname='$club')+(SELECT rate as artist FROM vendor WHERE vname='$artist'))))
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