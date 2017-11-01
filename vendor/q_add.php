<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>EZVIP | ADD QUOTATION</title>
	<link rel="stylesheet" href="../CSS/CSS2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 

        <!-- Date picker JS-->

        <script>
            $(function() {
                var dateFormat = "dd-mm-yy",
                    from = $("#from")
                    .datepicker({
                        //defaultDate: "+1w",
                        minDate:0,
                        changeMonth: true,
                        numberOfMonths: 3,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                    to = $("#to").datepicker({
                    	minDate:0,
                        changeMonth: true,
                        numberOfMonths: 3,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        from.datepicker("option", "maxDate", getDate(this));
                    });
                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }
                    return date;
                }
            });
        </script>
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

			<h2>ADD Quotation</h2>
		
				
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
			
				<form action="insert.php" method="POST">
					<table align="center">
						<tr><td class="td" align="center"> Quotation Name :*</td><td><input type="text" title="You Can Only Input Alphabetic Values!s" placeholder="Enter Quotation Name." name="qname" pattern="[A-Za-z]{1,}" required/></td></tr>
						<tr><td class="td" align="center"> Cost :*</td><td><input type="text" name="cost" pattern="[0-9]{2,10}" placeholder="Enter Cost of Quotation" required/></td></tr>

						<tr><td align="justify">Details :*</td><td><textarea name="details" placeholder="Enter Details of Quotation." style="width: 100%;height: 100px;padding: 12px 20px;box-sizing: border-box;resize: none;position: relative;background-color: #e9ece5;font-size: 15px;color: #3b3a36;font-weight: bold;border: 0px;border-radius:  18px 18px 18px 18px;"></textarea></td></tr>

						<tr><td class="td" align="center"> Available From :* </td><td><input type="text" id="from" placeholder="Enter DOB (dd-mm-yyyy)." name="from" required></td></tr>
						<tr><td class="td" align="center"> Available To:* </td><td><input type="text" id="to" placeholder="Enter DOB (dd-mm-yyyy)." name="to" required></td></tr>
						<tr><td></td><td><input type="submit" name="ADD" value="ADD"> <input type="reset" name="reset"  value="RESET"></td></tr> 
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
