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
$host="mysql";
$user="user";
$pass="saxud3sldnb";
$db="boxoffice";

$conn=mysqli_connect($host,$user,$pass,$db);
 if(!$conn)
 {
    trigger_error(mysqli_connect_error(),E_USER_ERROR);
	EXIT();
 }
 $username=$_COOKIE["boxoffice_login"];
 $myarr=explode(',',$username);

 $sql="select login from login_system where uname='$myarr[0]'";
 $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)<1)
	 {
	    // trigger_error("sql doesn't fetch any row from boxoffice data for login verification");
	    EXIT();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
       header('Location:profile.php');
	   mysqli_close($conn);
	   exit();
     }
}  
else
{
  header('Location:profile.php');
  mysqli_close($conn);
  exit();
}

$go="";

$conn=new mysqli("mysql","user","saxud3sldnb","boxoffice");
if($conn->connect_error)
  {
	$_SESSION["ac_conform_error"]="yes";
	header('Location:account_conformation.php');
	trigger_error($conn->connect_error,E_USER_ERROR);
	EXIT();
  }

$username=$_COOKIE["boxoffice_login"];
$myarr=explode(',',$username);

$sql="select ac_status from user_profile_data where uname='$myarr[0]'";

$r=$conn->query($sql);
$row = $r->fetch_assoc();

 if($row["ac_status"]=="activate") 
  {
    header('Location:profile.php');
    $conn->close();
    exit();
  }
  
  

  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      if($_REQUEST["email_code"]==""||strlen($_REQUEST["email_code"])>10)
	   {
	    
		  $_SESSION["ac_conform_error"]="yes";
	      header('Location:account_conformation.php');
		  $conn->close();
		  trigger_error(" email code is black",E_USER_ERROR);
		  EXIT();
	  
	   }
      else
	   {
	        if(preg_match("/^[0-9]+$/",$_REQUEST["email_code"]))
			{
		     $go=$_REQUEST["email_code"];
		     if($go=="12456")
		      {
			  
                 $sql="update user_profile_data set ac_status='activate' where uname='$myarr[0]'" ; 
                 if($conn->query($sql)===TRUE)
                   {
				     header('Location:profile.php');
					 $conn->close();
					 EXIT();
				   }	
			     else
                   {
				 
					 $_SESSION["ac_conform_error"]="yes";
	                 header('Location:account_conformation.php');
					 $conn->close();
					 trigger_error("last query doesn't executed",E_USER_ERROR);
					 EXIT();
				   }
               }	
                else
                 {
				   
				   $_SESSION["wrong_code_ac_conform_error"]="yes";
	               header('Location:account_conformation.php');
				   $conn->close();
				   trigger_error("Wrong code",E_USER_ERROR);
				   EXIT();
				 }				
			}
			
	  
	        else
		     {
				$_SESSION["ac_conform_error"]="yes";
	            header('Location:account_conformation.php');
				$conn->close();
				trigger_error("code is not proper digit code",E_USER_ERROR);
				EXIT();
			  }
			
		}	
		    
		     
		  
  }
 else
  {
  
    $_SESSION["ac_conform_error"]="yes";
	header('Location:account_conformation.php');
	$conn->close();
	trigger_error("the method of  submiting form of verfication code is not post",E_USER_ERROR);
	EXIT();
  }

?>
