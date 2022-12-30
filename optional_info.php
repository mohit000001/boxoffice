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
  private $uname,$conn,$nname,$h_shcool,$j_college,$edu,$lang,$cw,$religion,$rilation,$about;
  
  function __construct($n,$h,$j,$e,$l,$c,$re,$ri,$ab)
    {
	  $this->nname=$n;
	  $this->h_shcool=$h;
	  $this->j_college=$j;
	  $this->edu=$e;
	  $this->lang=$l;
	  $this->cw=$c;
	  $this->religion=$re;
	  $this->rilation=$ri;
	  $this->about=$ab;
	
	
	}
  function start_validation()
   {
     $this->nname=$this->test($this->nname);
     $this->h_shcool=$this->test($this->h_shcool);
	 $this->j_college=$this->test($this->j_college);
	 $this->edu=$this->test($this->edu);
	 $this->lang=$this->test($this->lang);
	 $this->cw=$this->test($this->cw);
	 $this->religion=$this->test($this->religion);
	 $this->rilation=$this->test($this->rilation);
	 $this->about=$this->test($this->about);
	 $this->full_to_validate();
   }
  function test($data)
   {
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
   
   }
  function full_to_validate()
  {
    if(strlen($this->nname)<30&&strlen($this->h_shcool)<50&&strlen($this->j_college)<50&&strlen($this->edu)<50&&strlen($this->lang)<30&&strlen($this->cw)<30&&strlen($this->about)<500&&$this->religion!==""&&$this->rilation!=="")    
	  {
	     $this->cookie_delete();
	  
	  }
	 else
      {
         $_SESSION["server_side_optional_details_error"]="yes";
         header('Location:signin_next_next.php');
		 trigger_error("one of the feild's length is greater than boxoffice polices and something is blank",E_USER_ERROR);
		 EXIT();
	  
	  }	 
  
  }
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
			   $this->insert_into_database();
			
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
	
 function insert_into_database()
  {
     $sql="update user_profile_data set nname='$this->nname',shcool='$this->h_shcool',j_college='$this->j_college',education='$this->edu',lang='$this->lang',cwork='$this->cw',religion='$this->religion',rstatus='$this->rilation',about='$this->about' where uname='$this->uname'";
     if($this->conn->query($sql)===TRUE)
	   {
	     $this->craete_login_cookie();
	     
	   }
	  ELSE
       {
         $_SESSION["server_side_optional_details_error"]="yes";
         header('Location:signin_next_next.php'); 
		 trigger_error("Everthing goes corectly,however sumbited from data not send to server",E_USER_ERROR);
		 EXIT();
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
if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  
    $obj=new optional_information($_REQUEST["nick_name"],$_REQUEST["high_shcool"],$_REQUEST["j_college"],$_REQUEST["bach_education"],$_REQUEST["lang"],$_REQUEST["currtent_work"],$_REQUEST["religion"],$_REQUEST["relationship"],$_REQUEST["self_info"]);
  
  }
 else
{
           
           $_SESSION["server_side_optional_details_error"]="yes";
           header('Location:signin_next_next.php');
		   trigger_error("the method of submiting  optional details from is not post",E_USER_ERROR);
		   EXIT();

} 
$obj->start_validation();
?>