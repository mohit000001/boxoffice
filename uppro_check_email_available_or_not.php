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
	exit();
 }
 $username=$_COOKIE["boxoffice_login"];
 $myarr=explode(',',$username);

 $sql="select login from login_system where uname='$myarr[0]'";
 $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)<1)
	 {
	     //trigger_error("sql doesn't fetch any row from boxoofice data for login verification",E_USER_ERROR);
	     exit();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
       header('Location:login.php');
	   mysqli_close($conn);
	   exit();
     }
}  
 
else
{
  header('Location:login.php');
  mysqli_close($conn);
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
 //$use=$_SESSION["un_com"];
 $sql="select email from user_profile_data";
 $sql_temp="select email from user_profile_data where uname='$myarr[0]'";
 $r_temp=mysqli_query($conn,$sql_temp);
 $row_temp=mysqli_fetch_assoc($r_temp);
 $user_email=$row_temp["email"];
 $r=mysqli_query($conn,$sql);
  $e=$_REQUEST["emailaddress"];
 
  $check=0;
 while($row = mysqli_fetch_assoc($r))
 {
    if($row["email"]===$e)
	  {
             if($e==$user_email)
              {

               }
             else
              {
               $check=1;
               break;
              } 
		  
	  }
    
 }
if($check==1)
{
	echo "yes";			 	
	
}	
	

 
mysqli_close($conn);
exit();
?>