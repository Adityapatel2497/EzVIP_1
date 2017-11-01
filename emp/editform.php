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
	<style type="text/css">
		select
		{
			  position: relative;
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 0px solid #ccc;
			  box-sizing: border-box;
			  border: 0px;
			  box-shadow: 0;
			  border-radius:  18px 18px 18px 18px;
		}
	</style>
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
					</center>
					<hr>
<?php
	include('connect.php');
	$pno=$_GET['pno'];
	$result = $db->prepare("SELECT * FROM package WHERE pno =:userpno");
	$result->bindParam(':userpno',$pno);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<table align="center">
<tr><td class="td" align="center">Serial No. :</td><td><input style="background: transparent;cursor: no-drop;" type="text" name="pno" value="<?php echo $pno; ?>"></td></tr>
<tr><td class="td" align="center">Package Name:</td><td>
<input type="text" name="pname" pattern="[A-Z a-z]{1,}" value="<?php echo $row['pname']; ?>" /></td></tr>
<tr><td class="td" align="center">Club Name :</td><td>
<select name="club">
									<option value="<?php echo $row['club']; ?>" hidden/><?php echo $row['club']; ?></option> 
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
<!--input type="text" name="lname" pattern="[A-Za-z]{1,}" value="<?php //echo $row['lname']; ?>" /--></td></tr>
<tr><td class="td" align="center">Artist :</td><td>
<select name="artist">
									<option value="<?php echo $row['artist']; ?>" hidden/><?php echo $row['artist']; ?></option> 
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
<!--input type="email" name="email" value="<?php //echo $row['email']; ?>" /--></td></tr>
<tr><td class="td" align="center">Commision % :</td><td>
<input type="text" name="com" pattern="[0-9]{2,3}" value="<?php echo $row['com']; ?>" /></td></tr>
<tr><td class="td" align="center">Total:</td><td>
<input type="text" name="total" value="<?php echo $row['total']; ?>" /></td></tr>
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
