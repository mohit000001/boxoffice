<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
set_error_handler("boxoffice_error_report");
function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR </b>: [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
}
if(isset($_COOKIE["boxoffice_login"]))
{
    header('Location:profile.php');
	exit();

}

if(isset($_COOKIE["boxoffice_login"]))
{
$host="mysql";
$user="user";
$pass="saxud3sldnb";
$db="boxoffice";

$conn=mysqli_connect($host,$user,$pass,$db);
 if(!$conn)
 {
    trigger_error(mysqli_connect_error(),E_USER_ERROR);
	exit();
 }
 $username=$_COOKIE["boxoffice_login"];
 $myarr=explode(',',$username);

 $sql="select login from login_system where uname='$myarr[0]'";
 $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)<1)
	 {
	     //trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
	     exit();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]==$row["login"])
     {
       header('Location:profile.php');
	   exit();
     }
}  



$go="";

  

  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      if($_REQUEST["mobile_code"]==""&&strlen($_REQUEST["mobile_code"])>10)
	   {
	      $host="mysql";
                    $user="user";
                    $pass="saxud3sldnb";
                    $db="boxoffice";

                   $conn=mysqli_connect($host,$user,$pass,$db);
                  if(!$conn)
                    {
                        trigger_error(mysqli_connect_error(),E_USER_ERROR);
						exit();
                     }

                  $u=$_POST["username"];
                  $sql="select mobile_number,email from user_profile_data where uname='$u'";
                  $r=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($r)<1)
	              {
	                    trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
						exit();
	   
	               }
                     $row=mysqli_fetch_assoc($r);
                     $_SESSION["em"]=$row["email"];
                     $_SESSION["mob"]=$row["mobile_number"]; 
				    
		  $_SESSION["ac_conform_error"]="yes";
	      header('Location:forgotton_password.php');
		  trigger_error(" email code is black",E_USER_ERROR);
		  exit();
	  
	   }
      else
	   {
	        if(preg_match("/^[0-9]+$/",$_REQUEST["mobile_code"]))
			{
		     $go=$_REQUEST["mobile_code"];
		     if($go=="156")
		      {
			  
                     $u=$_POST["username"];
 					 $_SESSION["un_pass"]=$u;
				     header('Location:change_password.php');
	                 exit();
	
			     
               }	
                else
                 {
				 
				    $host="mysql";
                    $user="user";
                    $pass="saxud3sldnb";
                    $db="boxoffice";

                   $conn=mysqli_connect($host,$user,$pass,$db);
                  if(!$conn)
                    {
                        trigger_error(mysqli_connect_error(),E_USER_ERROR);
						exit();
                     }

                  $u=$_POST["username"];
                  $sql="select mobile_number,email from user_profile_data where uname='$u'";
                  $r=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($r)<1)
	              {
	                    trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
                        exit();  	   
	               }
                     $row=mysqli_fetch_assoc($r);
                     $_SESSION["em"]=$row["email"];
                     $_SESSION["mob"]=$row["mobile_number"]; 
				    $_SESSION["wrong_code_ac_conform_error"]="yes";
	                header('Location:forgotton_password.php');
				    trigger_error("Wrong code",E_USER_ERROR);
					exit();
				 }				
			}
			
	  
	        else
		     {
		        $host="mysql";
                    $user="user";
                    $pass="saxud3sldnb";
                    $db="boxoffice";

                   $conn=mysqli_connect($host,$user,$pass,$db);
                  if(!$conn)
                    {
                        trigger_error(mysqli_connect_error(),E_USER_ERROR);
						exit();
                     }

                  $u=$_POST["username"];
                  $sql="select mobile_number,email from user_profile_data where uname='$u'";
                  $r=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($r)<1)
	              {
	                    trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
	                    exit();
	               }
                     $row=mysqli_fetch_assoc($r);
                     $_SESSION["em"]=$row["email"];
                     $_SESSION["mob"]=$row["mobile_number"]; 
				    
				$_SESSION["ac_conform_error"]="yes";
	            header('Location:forgotton_password.php');
				trigger_error("code is not proper digit code",E_USER_ERROR);
				exit();
			  }
			
		}	
		    
		     
		  
  }
 else
  {
    $host="mysql";
                    $user="user";
                    $pass="saxud3sldnb";
                    $db="boxoffice";

                   $conn=mysqli_connect($host,$user,$pass,$db);
                  if(!$conn)
                    {
                        trigger_error(mysqli_connect_error(),E_USER_ERROR);
						exit();
                     }

                  $u=$_POST["username"];
                  $sql="select mobile_number,email from user_profile_data where uname='$u'";
                  $r=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($r)<1)
	              {
	                    trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
						exit();
	   
	               }
                     $row=mysqli_fetch_assoc($r);
                     $_SESSION["em"]=$row["email"];
                     $_SESSION["mob"]=$row["mobile_number"]; 
				    
    $_SESSION["ac_conform_error"]="yes";
	header('Location:forgotton_password.php');
	trigger_error("the method of  submiting form of verfication code is not post",E_USER_ERROR);
	exit();
  }

?>
