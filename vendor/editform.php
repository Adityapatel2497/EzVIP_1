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
	textarea{
		width: 100%;
		height: 100px;
		padding: 12px 20px;
		box-sizing: border-box;
		resize: none;
		position: relative;
		background-color: #e9ece5;
		font-size: 15px;color: #3b3a36;
		font-weight: bold;border: 0px;
		border-radius:  18px 18px 18px 18px;
}
	</style>
</head>
<body>
<div class="container">
<div class="center">
<center>
<a href="v_home.php" ><label class="fa fa-home"> HOME </label></a>
<a href="#"><label class="fa fa-vcard"> PROFILE </label></a>
<a href="v_quotation.php" ><label class="fa fa-pencil-square-o"> QUOTATION </label></a>
<a href="logout.php" ><label class="fa fa-power-off"> LOGOUT </label></a>
<hr>

			<h2>Manage Quotation Page</h2>
		
				
					<div class="dropdown">
						<button  class="dropbtn fa fa-plus-square"><a href="q_add.php"> Add Accounts </a></button>
					</div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-pencil "><a href="u_quotation.php"> Update Accounts </a></button>
					  </div>
					<div class="dropdown">
					  <button class="dropbtn fa fa-trash-o"><a href="d_quotaion.php"> Delete Accounts </a></button>
					</div>
					</center>
					<hr>
<?php
	include('connect.php');
	$Qno=$_GET['Qno'];
	$result = $db->prepare("SELECT * FROM Quotation WHERE Qno = :Qno");
	$result->bindParam(':Qno', $Qno);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<table align="center">
<tr><td class="td" align="center">Quotation No. : </td><td><input  type="text" name="Qno" value="<?php echo $Qno; ?>"/></td></tr>
<tr><td class="td" align="center">Quotation Name:</td><td>
<input type="text" name="qname" pattern="[A-Za-z]{1,}" value="<?php echo $row['qname']; ?>" /></td></tr>
<tr><td class="td" align="center">Cost : </td><td>
<input type="text" name="cost" pattern="[0-9]{2,}" value="<?php echo $row['cost']; ?>" /></td></tr>

<tr><td align="justify">Details : </td><td><textarea  name="qdetails"><?php echo $row['qdetails']; ?></textarea></td></tr>

<tr><td class="td" align="center">Available From : </td><td>
<input type="text" name="qafrom"  value="<?php echo $row['qafrom']; ?>" /></td></tr>
<tr><td class="td" align="center">Available From : </td><td>
<input type="date" name="qato" value="<?php echo $row['qato']; ?>" /></td></tr>
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
