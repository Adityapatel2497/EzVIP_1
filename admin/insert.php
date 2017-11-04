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
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$phone = $_POST['cno'];
		$pass = $_POST['pass'];
		$type = $_POST['type'];
		$dob = $_POST['dob'];
		$pass2 = $_POST['pass2'];
		if ($pass == $pass2)
			{
			$query = $conn->prepare( "SELECT `email` FROM `usertable` WHERE `email` = ?" );			
			$query->bindValue( 1, $email );
			$query->execute();
			if($query->rowCount() > 0 )
			{	
				echo "<script language='javascript'>alert('Already Registeration Succesful!!');
							window.location.href='a_add.php';
					 		</script>";
			}
			else{
				$pass = md5($pass);
				// PDO Style Insert
				$sql = "INSERT INTO `usertable` VALUES 
					(NULL,'$fname','$lname','$email','$uname','$dob','$phone','$pass','$type')";
						if ($conn->query($sql))
						{
							echo "<script language='javascript'>alert('Registeration Succesful!!');
							window.location.href='a_add.php';
					 		</script>";
							
						}
			  			else
						{
							echo "<script language='javascript'>alert('Error!!');
							window.location.href='a_add.php';
					 		</script>";
						}
			}
			}
		}
	}

	catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
?>