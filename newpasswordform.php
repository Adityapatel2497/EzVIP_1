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
</head>
<body>
 <div class="container">
    <div class="center">
      <h1>Welcome to EzVip</h1>
      <h2>Please Login</h2>
      <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Enter Registered Email Id."  autocomplete="off" required/><br>
        <input type="password" name="pass1" placeholder="Enter New Password"  autocomplete="off" required/><br>
        <input type="password" name="pass2" placeholder="Confirm New Password" autocomplete="off" required/><br>
        <input type="submit" name="insert" value="Login"/><center><p><a href="forget.php">Forget Password?</a></p></center>
      </form>
    </div>
  </div>

</body>
</html>
