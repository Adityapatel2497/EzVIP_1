<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>
<!DOCTYPE html>
<head>
	<title>EZVIP | MANAGE ACCOUNT</title>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<html>
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
						<button  class="dropbtn fa fa-plus-square"><a href="a_add.php"> Add Accounts </a></button>
					</div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-pencil "><a href="u_accounts.php"> Update Accounts </a></button>
					  </div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-trash-o"><a href="d_accounts.php"> Delete Accounts </a></button>
					</div>
					</center>
					<hr>
		
<table border="0" cellspacing="0" cellpadding="2" align="center" >
<thead>
	<tr>
		<th> Sno </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Email </th>
		<th> Username </th>
		<th> DOB </th>
		<th> Contact </th>
		<th> Action </th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		$result = $db->prepare(" SELECT Sno, fname, lname, email, uname, dob, contact, type FROM usertable ORDER BY Sno ASC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['Sno']; ?></td>
		<td><?php echo $row['fname']; ?></td>
		<td><?php echo $row['lname']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['uname']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><?php echo $row['contact']; ?></td>
		<td><a href="editform.php?Sno=<?php echo $row['Sno']; ?>"><div class="dropdown"><button class="dropbtn fa fa-pencil "> Edit </button></div></a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<hr>
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