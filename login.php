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
    if(isset($_POST['forget']))
    {
        $email = $_POST['email'];
        $contact = $_POST['cno'];
        $dob = $_POST['date']; 
        if ($q = mysqli_query($db, "SELECT email,contact,dob FROM usertable WHERE email='$email' AND contact='$contact' AND dob = '$dob'")) 
        {
             header('Location : newpasswordform.php');                
        } 
        else
        {
            echo "error";
        }
        
    }
    if (isset($_POST['insert'])) {

        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        if($pass1==$pass2){
           $q = mysqli_query($db, "UPDATE usertable 
        SET pass = '$pass1' WHERE email ='$email'");

        }
        else{
            echo "error!!";
        }
     }
     
?>