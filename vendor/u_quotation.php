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
		
<table align="center" >
<thead>
	<tr>
		<th> Qno </th>
		<th> Quotation Name </th>
		<th> Cost </th>
		<th> Details </th>
		<th> Available From </th>
		<th> Available To </th>
		<th> Action </th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		$result = $db->prepare(" SELECT * FROM quotation");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr>
		<td><?php echo $row['Qno']; ?></td>
		<td><?php echo $row['qname']; ?></td>
		<td><?php echo $row['cost']; ?></td>
		<td><?php echo $row['qdetails']; ?></td>
		<td><?php echo $row['qafrom']; ?></td>
		<td><?php echo $row['qato']; ?></td>
		<td><a href="editform.php?Qno=<?php echo $row['Qno']; ?>"><div class="dropdown"><button class="dropbtn fa fa-pencil "> Edit </button></div></a></td>
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
