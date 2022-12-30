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
	         trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
	  
	        }
		 $row=mysqli_fetch_assoc($r);
            if($row["ac_status"]!=="activate")
                {
				 $_SESSION["ac_error"]="yes";
                
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

$postcom_liking="no";
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
 $post=$_REQUEST["post"];
// echo $post;
 $sql="select uname from post_liking where post_name='$post'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $postcom_liking="yes";
							 break;
						  
						  }
					  }
					  
 
  if($postcom_liking=="yes")
   {
        $sql="delete from post_liking where uname='$myarr[0]' and post_name='$post'";
		
		mysqli_query($conn,$sql);
		
		$sql="select likes from post_details where post_name='$post'";
        $r=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($r);
        $no_of_like=$row["likes"]-1;
        $sql="update post_details set likes='$no_of_like' where post_name='$post'";
        mysqli_query($conn,$sql);
		//$postcom_liking=="no";
		
	  
   
   }
  else
   { 
     $sql="select fname,lname from user_profile_data where uname='$myarr[0]'";
	 $r=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($r);
	 $fn=$row["fname"];
	 $ln=$row["lname"];
	 $dat=date("Y-m-d h:i:s");
     $sql="insert into post_liking(post_name,uname,fname,lname,date) values('$post','$myarr[0]','$fn','$ln','$dat')";
     mysqli_query($conn,$sql);
	 $sql="select likes from post_details where post_name='$post'";
     $r=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($r);
     $no_of_like=$row["likes"]+1;
     $sql="update post_details set likes='$no_of_like' where post_name='$post'";
     mysqli_query($conn,$sql);		
     //$postcom_liking=="yes";
	
   
   
   }
$postcom_liking="no";   
$sql="select uname from post_liking where post_name='$post'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $postcom_liking="yes";
							 break;
						  
						  }
					  }
					     
$sql="select comments,likes,shares from post_details where post_name='$post'";
$r=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($r);

echo $postcom_liking.",".$row["likes"].",".$row["comments"].",".$row["shares"];
 mysqli_close($conn);
 EXIT();
?>