<?php
 session_start();
 error_reporting(E_ALL);
 ini_set('display_errors',1);
 
set_error_handler("boxoffice_error_report");
function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : $no $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" NEW Error: $no $content, $mess in $file on $line ",3,"serverside_error_report.log");
	return false;
    
}
if(isset($_COOKIE["boxoffice_login"]))
{
    header('Location:profile.php');
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
    if(mysqli_num_rows($r)<1)
	 {
	     //trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
	     exit();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]==$row["login"])
     {
       header('Location:profile.php');
	   exit();
     }
}  
class search_user
{
   protected $conn,$id;
    
	function __construct($i)
	 {
	   $this->id=$i;
	 
	 }
    function connection()
	 {
	    if(strlen($this->id)>16)
		{
		  $_SESSION["search_user_field"]="yes";
	      header('Location:forgotton_password.php');
		  exit();
		}
	    $this->conn=new mysqli("mysql","user","saxud3sldnb","boxoffice");
		
		
		   if($this->conn->connect_error)
		     {
			    trigger_error($this->conn->connect_error,E_USER_ERROR);
			    exit(); 
			 }
			ELSE
               {
			     $sql="select fname,lname,uname,email,mobile_number from user_profile_data";
			     $r=$this->conn->query($sql);
				 $check="no";
				 while($row=$r->fetch_assoc())

				   {
				       if($this->id==$row["uname"])
					     {
						   $check="yes";
						 
						 }
				        else
						{
						  if($this->id==$row["email"])
                             {
							   $check="yes";
							 
							 }
						   else
                             {
							   if($this->id==$row["mobile_number"])
							    {
								   $check="yes";
								}
								else
								 {
								  	
								 }
							   
							 }						   
						}
					if($check=="yes")
                       {
					     
						 
	                       
							   $_SESSION["fn"]=$row["fname"];
							   $_SESSION["ln"]=$row["lname"];
							   $_SESSION["un"]=$row["uname"];
							   $_SESSION["em"]=$row["email"];
							   $_SESSION["mob"]=$row["mobile_number"];
	                           header('Location:forgotton_password.php');
							   break;
	                        
						  	
						 
					   }					
				   }
				  if($check=="no") 
				    {
						
					 $_SESSION["search_user_field"]="yes";
					 header('Location:forgotton_password.php');	
	                 EXIT();
					
					}
			   
			   }			
		 
		 }
	 
	 
	 }

     if($_SERVER["REQUEST_METHOD"]!=="POST")
	 {
	   trigger_error("method of submiting post is not post",E_USER_ERROR);
	   EXIT();
	 
	 }
	 else
     {
	  $obj=new search_user($_REQUEST["serch_user_input_box"]);
      $obj->connection();
	 }
	EXIT(); 
?>