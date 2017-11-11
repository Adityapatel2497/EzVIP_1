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

					<form action="insert.php" method="POST" >
					<table align="center">
						<tr><td class="td" align="center"> Package Name :*</td><td><input type="text" title="You Can Only Input Alphabetic Values!s" placeholder="Enter Package Name." name="pname" pattern="[A-Za-z] {1 , }" required></input></td></tr>
						<tr><td align="justify">Short Description :*</td><td><textarea name="sd" placeholder="Enter Short Description of Quotation." style="width: 100%;height: 100px;padding: 12px 20px;box-sizing: border-box;resize: none;position: relative;background-color: #e9ece5;font-size: 15px;color: #3b3a36;border: 0px;border-radius:  18px 18px 18px 18px;" maxlength="50"></textarea></td></tr>
						<tr><td align="justify">Long Description :*</td><td><textarea name="ld" placeholder="Enter Long Description of Quotation." style="width: 100%;height: 100px;padding: 12px 20px;box-sizing: border-box;resize: none;position: relative;background-color: #e9ece5;font-size: 15px;color: #3b3a36;border: 0px;border-radius:  18px 18px 18px 18px;" maxlength="50"></textarea></td></tr>
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
						<tr><td class="td" align="center"> List of Artists :*</td>
						<td>
							<?php 

										        require 'connect.php';    // connect to Database

										        try
										        {
										                 $sql = "select vname, rate from vendor where vtype = 'a'";
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
						<tr>
						<td class="td" align="center"> Set Commission % :*</td>
						<td>
							<input type="text" name="com" pattern="[0-9]{1,3}" placeholder="Set Charges For Package." title="You can only enter numric values." required>
							</input>
						</td>
					</tr>
						<tr>
						<td></td>
						<td><input type="submit" name="ADD" value="CREATE"></input> <input type="reset" name="reset"  value="RESET"></input></td></tr> 
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
