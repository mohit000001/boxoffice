<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR </b>: [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
}
if(isset($_COOKIE["boxoffice_signin"]))
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
 $username=$_COOKIE["boxoffice_signin"];
 $myarr=explode(',',$username);

 $sql="select signin from login_system where uname='$myarr[0]'";
 $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)<1)
	 {
	     EXIT();
	  
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_signin"]!==$row["signin"])
     {
       header('Location:home.php');
	   exit();
     }
	
}  
else
{
  
  header('Location:home.php');
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
 $row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]==$row["login"])
     {
	   
        header('Location:home.php');
		mysqli_close($conn); 
		exit();
     }
	 ELSE
	 {
	  mysqli_close($conn); 
	  }
}
class optional_information
{
  private $conn,$uname;
  
  

  function cookie_delete()
   {
       
      $this->conn= new mysqli("mysql","user","saxud3sldnb","boxoffice");
	  if ($this->conn->connect_error)
       {
           
           $_SESSION["server_side_optional_details_error"]="yes";
           header('Location:signin_next_next.php');
		   trigger_error($this->conn->connect_error,E_USER_ERROR);
		   EXIT();
       }
	   else
	    {
		  $this->uname=$_COOKIE["boxoffice_signin"];
          $myarr=explode(',',$this->uname);
		  $this->uname=$myarr[0];
		  setcookie("boxoffice_signin","",time()-84000,"/");
		  //unset($_COOKIE["boxoffice_signin"]);
		  $sql="update login_system set signin='NULL' where uname='$myarr[0]'";
		  //if(!isset($_COOKIE["boxoffice_signin"]))
		  //{
		    if($this->conn->query($sql)===TRUE)
		     {
			   $this->craete_login_cookie();
			
			 }
		     else 
		     {
		      
              $_SESSION["server_side_optional_details_error"]="yes";
              header('Location:signin_next_next.php');
			  trigger_error("SERVER_SIDE_COOKEI NOT DELETED",E_USER_ERROR);
			  EXIT();
		     }
		  //}	
        /* else
            {
			  trigger_error("CLIENT_SIDE_COOKIE NOT DELETED");
              session_start();
              $_SESSION["server_side_optional_details_error"]="yes";
              header('Location:signin_next_next.php'); 
			}*/		 
		}
    }
  
 function craete_login_cookie()
 {
    $sql="select mobile_number from user_profile_data where uname='$this->uname'";
	$r=$this->conn->query($sql);
	$row=$r->fetch_assoc();
	$mob=$row["mobile_number"];
    $cook=$this->uname.",".$mob."boxoffice_login_secure";
    setcookie("boxoffice_login",$cook,time()+84000*30,"/");
	$sql="update login_system set login='$cook' where uname='$this->uname'";
	if($this->conn->query($sql)===TRUE)
	  {
	      header('Location:account_conformation.php'); 
		  EXIT();
	  }
    ELSE
	 {
	   
         $_SESSION["server_side_optional_details_error"]="yes";
         header('Location:signin_next_next.php');
		 trigger_error("Login cookie has not been created on server side",E_USER_ERROR);
		 EXIT();
	  
	 }
    
 
 } 
}
set_error_handler("boxoffice_error_report");


$obj=new optional_information();
 
$obj->cookie_delete();
?>