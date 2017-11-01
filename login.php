<?php
session_start();
$errmsg_array = array();
$errflag = false;   

    require 'DBConnection.php';
      
    //login
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['pass']; 
        if ($q = mysqli_query($db, "SELECT type FROM usertable WHERE uname='$username' AND pass='$password'")) 
        {
        
            while ($row = mysqli_fetch_array($q, MYSQLI_BOTH)) 
            {
            	//session
                $_SESSION['username'] = $username;                
                if ($row['type'] == "a") 
                {
                     header('Location: ../ezvip/admin/a_home.php');
                } 
                else if ($row['type'] == "v") 
                {
                    header('Location: ../ezvip/vendor/v_home.php');
                } 
                else if ($row['type'] == "e") 
                {
                    header('Location: ../ezvip/emp/e_home.php');
                } 
                             
            }
        } 
        if(empty($_SESSION['username'])) 
        {
			 echo 'incorrect username/ password please try again.' ;
			 header('Location: index.php');
		}
    }
     
?>