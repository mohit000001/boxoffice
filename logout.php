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
	     trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
		 EXIT();
	  
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]==$row["login"])
     {
	   setcookie("boxoffice_login","",time()-84000,"/");
		  
	   $sql="update login_system set signin='NULL' where uname='$myarr[0]'";
	   mysqli_query($conn,$sql);
	   mysqli_close($conn);
       header('Location:login.php');
	   EXIT();
     }
}  
else
{
  header('Location:login.php');
  EXIT();
}
EXIT();
?>