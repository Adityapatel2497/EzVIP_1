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
<h2>Send Invites</h2>
<form action="#" method="POST">
	<table align="center" cellspacing="7" cellpadding="5">
		<tr>
			<td>
				<div class="dropdown">
						<button  class="dropbtn"> List Of Events.....  &nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i> </button>
						<div class="dropdown-content">
						<input type="checkbox" value="">DJ Night</input><br>	
						</div>
					</div>
				<div class="dropdown">
						<button  class="dropbtn"> List Of Members.....  &nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i> </button>
						<div class="dropdown-content">
						<input type="checkbox" value="">DJ Night</input><br>	
						</div>
					</div>
			</td>
		</tr>
		<tr><td><input type="submit" name="send" value="SEND">  &nbsp;</input><input type="reset"></input></td></tr>
	</table>
	
</form>
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
