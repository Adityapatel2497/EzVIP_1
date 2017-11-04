<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>

<!DOCTYPE htmls>
<html>
<head>
	<title>EZVIP | HOME</title>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  max-width: 300px;
	  margin: auto;
	  text-align: center;
	  font-family: arial;
	}

	.title {
	  color: grey;
	  font-size: 18px;
	}

	button {
	  border: none;
	  outline: 0;
	  display: inline-block;
	  padding: 8px;
	  color: white;
	  background-color: #000;
	  text-align: center;
	  cursor: pointer;
	  width: 100%;
	  font-size: 18px;
	}

	a {
	  text-decoration: none;
	  font-size: 22px;
	  color: black;
	}

	button:hover, a:hover {
	  opacity: 0.7;
	}
	</style>
</head>
<body>
<div class="container">
<div class="center">
<center>
<a href="v_home.php" ><label class="fa fa-home"> HOME </label></a>
<a href="profile.php"><label class="fa fa-vcard"> PROFILE </label></a>
<a href="v_quotation.php" ><label class="fa fa-pencil-square-o"> QUOTATION </label></a>
<a href="logout.php" ><label class="fa fa-power-off"> LOGOUT </label></a>
</center>
<hr>
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <table align="center" >
<tbody>
	<?php
		include('connect.php');
		$result = $db->prepare(" SELECT fname,lname,email,contact FROM usertable WHERE uname = '{$_SESSION['username']}'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	
		<tr><td>First Name :</td><td><?php echo $row['fname']; ?></td></tr>
		<tr><td>Last Name :</td><td><?php echo $row['lname']; ?></td></tr>
		<tr><td>Email :</td><td><?php echo $row['email']; ?></td></tr>
		<tr><td>Contact No. :</td><td><?php echo $row['contact']; ?></td></tr>
	
	<?php
		}
	?>
</tbody>
</table>
 
</div>
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
