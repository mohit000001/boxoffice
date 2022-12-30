<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
$post1_liking="no";
set_error_handler("boxoffice_error_report");

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
}

$go="no";
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
	     //exit();
		  login_no();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
	    
	   login_no();
	  
     }
	  else
	 {
	   $login="yes";
	   $sql="select ac_status from user_profile_data where uname='$myarr[0]'";
		$r=mysqli_query($conn,$sql);
		 if(mysqli_num_rows($r)<1)
	      {
	         login_no();
	        }
		 $row=mysqli_fetch_assoc($r);
            if($row["ac_status"]!=="activate")
                {
				  
                  login_no();
				    				 
				}		
	        else
			{
			
			login_yes();  
			}
	
	 }
	
} 
else
{
      
      login_no();

 }
$post=$_REQUEST["post"];
function login_yes()
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
 $post1_liking="no";
 $post=$_REQUEST["post"];
 $username=$_COOKIE["boxoffice_login"];
 $myarr=explode(',',$username);
 $use=$myarr[0];
 $sql="select fname,lname from user_profile_data where uname='$use'";
 $r=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($r);
 $fname=$row["fname"];
  $lname=$row["lname"];
   $dat=date("Y-m-d h:i:s");
   $c=$_REQUEST["comment"];
   
  if(!empty($c))
   {
     $c=trim($c);
     $c=stripslashes($c);
     $c=htmlspecialchars($c);
     
   }
   else
   {
      /*$_SESSION["comment_error"]="yes";
      header('Location:home.php');
      trigger_error("entered comment is not vaild comment according to boxoffice polices",E_USER_ERROR);*/
	  exit();
   }
$sql="insert into post_data (post_name,uname,fname,lname,comment,date) values('$post','$use','$fname','$lname','$c','$dat') ";
mysqli_query($conn,$sql);
$sql="select comments from post_details where post_name='$post'";
$r=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($r);
$no_of_com=$row["comments"]+1;
$sql="update post_details set comments='$no_of_com' where post_name='$post'";
mysqli_query($conn,$sql);
$sql="select uname from post_liking where post_name='$post'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $post1_liking="yes";
							 break;
						  
						  }
					  }
					  

$sql="select comments,likes,shares from post_details where post_name='$post'";
$r=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($r);
echo $post1_liking.",".$row["likes"].",".$row["comments"].",".$row["shares"];
mysqli_close($conn);
exit();
}
function login_no()
 {
    $host="mysql";
     $user="user";
     $pass="saxud3sldnb";
     $db="boxoffice";
      $post=$_REQUEST["post"];
    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn)
    {
    trigger_error(mysqli_connect_error(),E_USER_ERROR);
	exit();
    }
    $sql="select comments,likes,shares from post_details where post_name='$post'";
    $r=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($r);
   echo "no".",".$row["likes"].",".$row["comments"].",".$row["shares"];
 
  mysqli_close($conn);
  exit();
 }

?>