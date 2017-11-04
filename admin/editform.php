<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
	  $( function() {
	    $( "#datepicker" ).datepicker({
	      dateFormat: 'dd-mm-yy',
	      changeMonth: true,
	      changeYear: true,
	      yearRange: '1980:2005'
	    });
	  } );
	  </script>
</head>
<body>
<div class="container">
<div class="center">
<center>
<a href="a_home.php" ><label class="fa fa-home"> HOME </label></a>
<a href="a_manage.php"><label class="fa fa-vcard"> MANAGE ACCOUNTS </label></a>
<a href="a_report.php" ><label class="fa fa-pencil-square-o"> GENRATE REPORT </label></a>
<a href="logout.php" ><label class="fa fa-power-off"> LOGOUT </label></a>
<hr>

			<h2>Manage Accounts Page</h2>
		
				
					<div class="dropdown">
						<button  class="dropbtn fa fa-plus-square"><a href="a_add.html"> Add Accounts </a></button>
					</div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-pencil "><a href="u_accounts.php"> Update Accounts </a></button>
					  </div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-trash-o"><a href="d_accounts.php"> Delete Accounts </a></button>
					</div>
					</center>
					<hr>
<?php
	include('connect.php');
	$Sno=$_GET['Sno'];
	$result = $db->prepare("SELECT Sno, fname, lname, email, uname, dob, contact FROM usertable WHERE Sno= :userSno");
	$result->bindParam(':userSno', $Sno);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<table align="center">
<tr><td class="td" align="center">Serial No.</td><td><input style="background: transparent;cursor: no-drop;" type="text" name="Sno" value="<?php echo $Sno; ?>"/></td></tr>

<tr><td class="td" align="center">First Name:</td><td>
<input type="text" name="fname" pattern="[A-Za-z]{1,}" value="<?php echo $row['fname']; ?>" /></td></tr>

<tr><td class="td" align="center">Last Name</td><td>
<input type="text" name="lname" pattern="[A-Za-z]{1,}" value="<?php echo $row['lname']; ?>" /></td></tr>

<tr><td class="td" align="center">Email</td><td>
<input type="email" name="email" value="<?php echo $row['email']; ?>" /></td></tr>

<tr><td class="td" align="center">Username</td><td>
<input type="text" name=uname pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,8}$" value="<?php echo $row['uname']; ?>" /></td></tr>

<tr><td class="td" align="center">DOB</td><td>
<input type="text" name="dob" id="datepicker" data-formate="dd-mm-yyyy" value="<?php echo $row['dob']; ?>" /></td></tr>

<tr><td class="td" align="center">Contact</td><td>
<input type="text" name="cno" pattern="[0-9]{10}" value="<?php echo $row['contact']; ?>" /></td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="Update" /></td></tr>
</table>
</form>
<?php
	}
?>
</div>
	</div>

</body>
</html>
<?php
} 
	else
	{ 
        header('Location: ../');	
    } 
?>
