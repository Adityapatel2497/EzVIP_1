<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>
<!DOCTYPE htmls>
<html>
<head>
	<title>EZVIP | Report</title>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
		    $('#report').DataTable
			( 
				{
				    dom: 'Bfrtip',
				    buttons: [
				    'print'
				    ]
				} 
			);
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
</center>
<hr>
<h2>Selcect Daates To Genrate Report.</h2>
<form action="" method="POST">
	<table align="center"> 
		<tr>
			<td><input type="date" name="date1"></td>
			<td align="center"><b>TO<b></td>
			<td><input type="date" name="date2" data-format="dd-mm-yyyy"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" name="report" value="Genrate"></td>
		</tr>
	</table>
</form>
<hr>
<table id="report" border="1" cellspacing="5" cellpadding="2" align="center">
<thead>
	<tr>
		<th> Sno </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Email </th>
		<th> Username </th>
		<th> DOB </th>
		<th> Contact </th>
	</tr>
</thead>
<tb>
	<?php
		include('connect.php');
		if (isset($_POST['report'])) {
			
		$date1 = $_POST['date1'];
		$date2 = $_POST['date2'];

		$result = $db->prepare(" SELECT Sno, fname, lname, email, uname, dob, contact, type FROM usertable WHERE dob >= '$date1' AND dob <= '$date2'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr>
		<td><?php echo $row['Sno']; ?></td>
		<td><?php echo $row['fname']; ?></td>
		<td><?php echo $row['lname']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['uname']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><?php echo $row['contact']; ?></td>
	</tr>
	<?php

		}
	}
	?>
</tb>
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
