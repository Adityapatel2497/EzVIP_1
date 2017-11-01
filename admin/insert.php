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
				echo '<script language="javascript">';	
				echo 'alert("This email ID is already registered")';
				echo '</script>';	
			}
			else{
				$pass = md5($pass);
				// PDO Style Insert
				$sql = "INSERT INTO `usertable` VALUES 
					(NULL,'$fname','$lname','$email','$uname','$dob','$phone','$pass','$type')";
						if ($conn->query($sql))
						{
							echo '<script language="javascript">';
							echo 'alert("Account Registration Successful")';
							echo '</script>';
							echo "header('Location: a_add.html');";
						}
			  			else
						{
							echo '<script language="javascript">';
							echo 'alert("Account Registration Failed")';
							echo '</script>';
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