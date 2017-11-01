<?php

include 'dbconnect.php';
session_start();
	if(isset($_SESSION['username']))
	{
//Register
try
	{	
	
	// User Registeration Page
	
	if (isset($_POST['ADD']))
		{
		$qname = $_POST['qname'];
		$cost = $_POST['cost'];
		$details = $_POST['details'];
		$from = $_POST['from'];
		$to = $_POST['to'];

			$query = $conn->prepare( "SELECT `qname` FROM `quotation` WHERE `qname` = ?" );			
			$query->bindValue( 1, $qname );
			$query->execute();
			if($query->rowCount() > 0 )
			{	
				echo '<script language="javascript">';	
				echo 'alert("This quotation name is already registered")';
				echo '</script>';	
			}
			else{
				// PDO Style Insert
				$sql = "INSERT INTO `quotation` VALUES 
					(NULL,'$qname','$cost','$details','$from','$to')";
						if ($conn->query($sql))
						{
							echo '<script language="javascript">';
							echo 'alert("Quotation Registration Successful")';
							echo '</script>';
				
						}
			  			else
						{
							echo '<script language="javascript">';
							echo 'alert("Quotation Registration Failed")';
							echo '</script>';
						}
			}
			}
		header('location: q_add.html');
	}

	catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}

	else
	{ 
        header('Location: ../');	
    } 
?>