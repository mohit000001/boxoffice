<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

set_error_handler("boxoffice_error_report");

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    return false;
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
	     exit();
	  
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]==$row["login"])
     {
	   
       header('Location:profile.php');
	   exit();
     }
} 
if(!isset($_SESSION["un_pass"])) 
  {
       header('Location:forgotton_passwor.php');
	   exit();
  }

 $host="mysql";
$user="user";
$pass="saxud3sldnb";
$db="boxoffice";

$conn=mysqli_connect($host,$user,$pass,$db);
 if(!$conn)
 {
    trigger_error(mysqli_connect_error(),E_USER_ERROR);
 }
 $usernam=$_SESSION["un_pass"];
 
 $pass=$_REQUEST["new_pass"];
 

 if(preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$pass)&&strlen($pass)<15&&$pass!=="")
 {
   $sql="update user_profile_data set password='$pass' where uname='$usernam'" ;
    if(!mysqli_query($conn,$sql))
      {
	  $_SESSION["change_pass_serverside_error"]="yes";
	  header('Location:change_password.php');
	  mysqli_close($conn);
	  exit();
   }
   else
   {
     
	   unset($_SESSION["un_pass"]);
	   $_SESSION["change_pass_succ"]="yes";
       header('Location:login.php');
       mysqli_close($conn);
       exit();
   }
   
 }
 else
 {
    $_SESSION["change_pass_serverside_error"]="yes";
	header('Location:change_password.php');
	mysqli_close($conn);
	exit();
 }
 mysqli_close($conn);
?>