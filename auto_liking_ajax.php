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
$ac_sta="no";
$login="no";
$post1_liking="no";
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
	 
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
	   
     }
	  else
	 {
	   $login="yes";
	   $sql="select ac_status from user_profile_data where uname='$myarr[0]'";
		$r=mysqli_query($conn,$sql);
		 if(mysqli_num_rows($r)<1)
	      {
	         //trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
	          //EXIT();
	        }
		 $row=mysqli_fetch_assoc($r);
            if($row["ac_status"]=="activate")
                {
				 $ac_sta="yes"; 				 
				}		
	
	 }
	mysqli_close($conn);
} 


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

 
if($login=="yes"&&$ac_sta=="yes")
{
$username=$_COOKIE["boxoffice_login"];
$myarr=explode(',',$username);
$sql="select uname from post_liking where post_name='post1'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $post1_liking="yes";
							 break;
						  
						  }
					  }
}					  
$sql="select comments,likes,shares from post_details where post_name='post1'";
$r=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($r);

echo $post1_liking.",".$row["likes"].",".$row["comments"].",".$row["shares"];
mysqli_close($conn);
exit();
?>

