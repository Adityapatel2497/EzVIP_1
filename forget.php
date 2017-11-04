<head>
<title>EZVIP</title>
	<link rel="stylesheet" href="CSS/CSS.css">
	<style type="text/css">
		a:link, a:visited{

    background-color: transparent;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    color: #3b3a36;
    border: 0px;
    border-radius: 30px 30px 30px 30px; 

}
	</style>
  <!-- Jquery -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
      <h1>Welcome</h1>
      <h2>Forget Password</h2>
      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Enter Registered Email Id."  autocomplete="off" required/><br>
        <input type="text" name="cno" placeholder="Enter Your Contact Number." pattern="[0-9]{10}" required></input>
        <input type="text" name="date" id="datepicker" placeholder="Enter Your Date Of Birth." autocomplete="off" required/><br>
        <input type="submit" name="forget" value="Login"/><center><p><a href="forget.php">Forget Password?</a></p></center>
      </form>
    </div>
  </div>

</body>
</html>
