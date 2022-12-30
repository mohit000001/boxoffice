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
 $po=$_REQUEST["pos"];
 $sql="select fname,lname,date,comment from post_data where post_name='$po'";
 $r=mysqli_query($conn,$sql);
 date_default_timezone_set('Asia/Kolkata');
 while($row = mysqli_fetch_assoc($r))
		     {
			 $d=strtotime($row['date']);
			 $c=date('d-m-Y h:i:s a',$d);
			    echo "<div style='color:black; border-bottom:solid thin black; padding:10px; border-radius:5px;'><b  style='text-decoration:underline;'>".$row["fname"]." ".$row["lname"]." :</b> <b>[".$c."]</b><br>:-<span style='color:#1E90FF;'>".$row["comment"]."</span></div>";
			 
			 }
   
mysqli_close($conn);	
exit();	  
?>