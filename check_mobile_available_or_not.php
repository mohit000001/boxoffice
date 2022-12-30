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
$check=0;
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
 //$use=$_SESSION["un_com"];
 $sql="select mobile_number from user_profile_data";
 $r=mysqli_query($conn,$sql);
  $m=$_REQUEST["mobile"];
 
  $check=0;
 while($row = mysqli_fetch_assoc($r))
 {
    if($row["mobile_number"]===$m)
	  {
        $check=1;
          break;
		  
	  }
    
 }
if($check==1)
{
	echo "yes";			 	
	
}	
	

 
mysqli_close($conn);
exit();
?>