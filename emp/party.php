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
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
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
</center>
<hr>
<h2>Create Party<h2>
				<form action="insert.php" method="POST">
					<table align="center">
						<tr><td class="td" align="center"> List of Clubs :*</td>
						<td>
								 <?php 

										        require 'connect.php';    // connect to Database

										        try
										        {
										                 $sql = "select vname from vendor where vtype = 'c'";
										                 $result = $db->query($sql);
										                 $result->setFetchMode(PDO::FETCH_ASSOC);

										                 echo '<select name="club">';

										             while ( $row = $result->fetch() ) 
										             {

										                echo '<option value="" hidden>Select Club</option>
										                <option value="'.$row['vname'].'">'.$row['vname'].'</option>';
										             }

										             echo '</select>';
										            }
										            catch (PDOException $e)
										            {   
										                die("Some problem getting data from database !!!" . $e->getMessage());
										            }
										    ?>
						</td>
						</tr>
						<tr><td class="td" align="center"> List of Artists :*</td>
						<td>
							<?php 

										        require 'connect.php';    // connect to Database

										        try
										        {
										                 $sql = "select vname from vendor where vtype = 'a'";
										                 $result = $db->query($sql);
										                 $result->setFetchMode(PDO::FETCH_ASSOC);

										                 echo '<select name="artist">';

										             while ( $row = $result->fetch() ) 
										             {

										                echo '<option value="" hidden>Select Artist</option>
										                <option value="'.$row['vname'].'">'.$row['vname'].'</option>';
										             }

										             echo '</select>';
										            }
										            catch (PDOException $e)
										            {   
										                die("Some problem getting data from database !!!" . $e->getMessage());
										            }
										    ?>
						</td></tr>
						<tr><td class="td" align="center"> Set Entrance Charges :*</td><td><input type="text" name="charge" pattern="[0-9]{4,}" placeholder="Set Charges For Package." required></input></td></tr>
						<tr><td class="td" align="center"> Set Guest Limit :*</td><td><input type="text" name="guest" pattern="[0-9]{2,4}" placeholder="Set Guest Limit For Package." required></input></td></tr>
						<tr><td class="td" align="center"> Set Date :* </td><td><input type="date" data-format="dd/MM/yyy" id="datepicker" placeholder="dd-MM-yyyy" name="date" required/></td></tr>
						<tr><td class="td" align="center"> Time :* </td><td><input type="time" id="timepicker" name="time" required></td></tr>
						<tr><td></td><td><input type="submit" name="party" value="ADD"> <input type="reset" name="reset"  value="RESET"></td></tr> 
					</table>
				</form>
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
