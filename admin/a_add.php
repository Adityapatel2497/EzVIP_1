<?php
	session_start();
	if(isset($_SESSION['username']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>EZVIP | ADD ACCOUNT</title>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'dd-mm-yy',
      changeMonth: true,
      changeYear: true,
      yearRange: '1980:2005'
    });
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
<hr>
			<h2> ADD ACCOUNTS </h2>
		
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
			
				<form action="insert.php" method="POST" >
					<table align="center">
						<tr><td class="td" align="center"> First Name :*</td><td><input type="text" title="You Can Only Input Alphabetic Values!s" placeholder="Enter Frist Name." name="fname" pattern="[A-Za-z]{1,}" required></input></td></tr>
						<tr><td class="td" align="center"> Last Name :*</td><td><input type="text" pattern="[A-Za-z]{1,}" placeholder="Enter Last Name." name="lname" required></input></td></tr>
						<tr><td class="td" align="center"> Email :*</td><td><input type="email" placeholder="Enter Email." name="email" required></input></td></tr>
						<tr><td class="td" align="center"> UserName :*</td><td><input type="text" name="uname" placeholder="Enter UserName." name="uname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,8}$" required></input></td></tr>
						<tr><td class="td" align="center"> DOB :*</td><td><input type="text" id="datepicker" data-formate="dd-mm-yyyy" placeholder="Enter DOB (dd-mm-yyyy)." name="dob" required></input></td></tr>
						<tr><td class="td" align="center"> Contact No. :*</td><td><input type="text" name="cno" pattern="[0-9]{10}" placeholder="000 000 0000" name="cno" required=></input></td></tr>
						<tr><td class="td" align="center"> Password :*</td><td><input type="password" name="pass" placeholder="Enter password." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></input></td></tr>
						<tr><td class="td" align="center"> Confirm Password:*</td><td><input type="password" name="pass2" placeholder="ReEnter password." required></input></td></tr>
						<tr><td class="td" align="center"> Type :*</td>
						<td><input type="radio" name="type" value="a">Admin</input>&nbsp;&nbsp;<input type="radio" name="type" value="v">Vendor</input>&nbsp;&nbsp;<input type="radio" name="type" value="e">Employee</input>
						</td></tr>
						<tr><td></td><td><input type="submit" name="ADD" value="ADD"></input> <input type="reset" name="reset"  value="RESET"></input></td></tr> 
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