<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

set_error_handler("boxoffice_error_report");

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
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
	     exit();
	  
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
	    EXIT();
     }
	  else
	 {
	   $login="yes";
	   $sql="select ac_status from user_profile_data where uname='$myarr[0]'";
		$r=mysqli_query($conn,$sql);
		 if(mysqli_num_rows($r)<1)
	      {
	         //trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
	           exit();
	        }
		 $row=mysqli_fetch_assoc($r);
            if($row["ac_status"]!=="activate")
                {
				 
                
				 exit();
	            // trigger_error(E_USER_ERROR);   				 
				}		
	  
	
	 }
	mysqli_close($conn);
} 
else
{
	    mysqli_close($conn);
	   //trigger_error("not login",E_USER_ERROR);
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
	EXIT();
 }
 $username=$_COOKIE["boxoffice_login"];
 $myarr=explode(',',$username);
 $dis=$_REQUEST["distination"];
 $sql="select fname,lname from user_profile_data where uname='$myarr[0]'";
	 $r=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($r);
	 $fn=$row["fname"];
	 $ln=$row["lname"];
	 $dat=date("Y-m-d h:i:s");
     $sql="insert into post_sharing(post_name,uname,fname,lname,date,distination) values('post1','$myarr[0]','$fn','$ln','$dat','$dis')";
     mysqli_query($conn,$sql);
	 $sql="select shares from post_details where post_name='post1'";
     $r=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($r);
     $no_of_shares=$row["shares"]+1;
     $sql="update post_details set shares='$no_of_shares' where post_name='post1'";
     mysqli_query($conn,$sql);
		
    mysqli_close($conn);

}
else
 {
   exit();
 }
?>