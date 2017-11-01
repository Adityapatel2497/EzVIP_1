<?php
@ob_start();
session_start();

include 'dbconnect.php';
//Register
try
	{	
	
	// User Registeration Page
	
	if (isset($_POST['ADD']))
		{
		$pname = $_POST['pname'];
		$club = $_POST['clubs'];
		$artist = $_POST['artists'];
		$com = $_POST['com'];
		
			$query = $conn->prepare( "SELECT `pname` FROM `package` WHERE `pname` = ?" );			
			$query->bindValue( 1, $pname );
			$query->execute();
			if($query->rowCount() > 0 )
			{	
				echo "<script language='javascript'>alert('This Package is already registered');
				window.location.href='a_package.php';
				 </script>";

			}
			else{
				// PDO Style Insert
				$sql = "INSERT INTO `package` VALUES 
					(NULL,'$pname','$club','$artist','$com','2000')";
						if ($conn->query($sql))
						{
							echo "<script language='javascript'>alert('Package Succesfully Created!!');
							window.location.href='a_package.php';
					 		</script>";
						}
			  			else
						{
							echo "<script language='javascript'>alert('Package Fail to Created!!');
							window.location.href='a_package.php';
					 		</script>";
						}
						
			}
			}

		if (isset($_POST['party']))
		{
		$club = $_POST['club'];
		$artist = $_POST['artist'];
		$charge = $_POST['charge'];
		$guest = $_POST['guest'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		
			$query = $conn->prepare( "SELECT club,artist FROM party WHERE `date` = '$date'  AND `time` = '$time'" );			
			$query->execute();
			if($query)
			{	
				echo "<script language='javascript'>alert('This Party is already registered');
				window.location.href='party.php';
				 </script>";

			}
			else{
				// PDO Style Insert
				$sql = "INSERT INTO `party` VALUES 
					(NULL,'$club','$artist','$charge','$guest','$date','$time')";
						if ($conn->query($sql))
						{
							echo "<script language='javascript'>alert('Package Succesfully Created!!');
							window.location.href='party.php';
					 		</script>";
						}
			  			else
						{
							echo "<script language='javascript'>alert('Package Fail to Created!!');
							window.location.href='party.php';
					 		</script>";
						}
						
			}
			}
		}

	catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
?>