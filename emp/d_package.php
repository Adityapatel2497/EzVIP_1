<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>EZVIP | HOME</title>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<div class="center">
<center>
<a href="e_home.php" ><label class="fa fa-home"> HOME </label></a>
<a href="party.php"><label class="fa fa-pencil-square-o"> CREATE PARTY </label></a>
<a href="invite.php" ><label class="fa fa-telegram"> SEND INVITES </label></a>
<a href="manage.php"><label class="fa fa-briefcase"> MANAGE PACKAGES </label></a>
<a href="share.php"><label class="fa fa-glass"> SHARE PARTY </label></a>
<a href="logout.php" ><label class="fa fa-power-off"> LOGOUT </label></a>
<hr>
<h2>Manage Packages Page</h2>
		
				
					<div class="dropdown">
						<button  class="dropbtn fa fa-plus-square"><a href="a_package.php"> Create Packages </a></button>
					</div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-pencil "><a href="e_package.php"> Edit Packages </a></button>
					  </div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-trash-o"><a href="d_package.php"> Delete Packages </a></button>
					</div>
					</center>
					<hr>
					<table border="0" cellspacing="0" cellpadding="2" align="center" >
<thead>
	<tr>
		<th> # </th>
		<th> Package Name </th>
		<th> Price </th>
		
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		$result = $db->prepare(" SELECT pno, pname, total FROM package");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr>
		<td><?php echo $row['pno']; ?></td>
		<td><?php echo $row['pname']; ?></td>
		<td><?php echo $row['total']; ?></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<form action="delete.php" method="POST">
	<table align="center">
		<tr><td style="width: auto;"><input type="text" name="pno" pattern="[0-9]{1,}" placeholder="Select Package Number from above Table!" required></td><td style="width: auto;"><input type="submit" value="Delete" style="width: 100%;"></td></tr>
	</table>
</form>
<hr>
</center>
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
