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
   header('Location:profile.php');
   EXIT();

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

 $sql="select login from login_system where uname='$myarr[0]'";
 $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)<1)
	 {
	     //trigger_error("sql doesn't fetch any row from boxoffice data for login verification");
	     EXIT();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]==$row["login"])
     {
       header('Location:profile.php');
	   EXIT();
     }
}  
class login
{
   protected $conn,$id,$pass;
    
	function __construct($i,$p)
	 {
	   $this->id=$i;
	 
	   $this->pass=$p;
	 }
    function connection()
	 {
	    if($this->id==""||$this->pass==""||strlen($this->id)>30||!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$this->pass))
		{
		 $_SESSION["login_field"]="yes";
		 header('Location:login.php');
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
			     $sql="select uname,email,mobile_number,password from user_profile_data";
			     $r=$this->conn->query($sql);
				 $check="no";
				 while($row=$r->fetch_assoc())

				   {
				       if($this->id==$row["uname"]&&$this->pass==$row["password"])
					     {
						   $check="yes";
						   
						 }
				        else
						{
						  if($this->id==$row["email"]&&$this->pass==$row["password"])
                             {
							   $check="yes";
							   
							 }
						   else
                             {
							   if($this->id==$row["mobile_number"]&&$this->pass==$row["password"])
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
					     $cook=$row["uname"].",".$row["mobile_number"]."boxoffice_login_secure";
                         setcookie("boxoffice_login",$cook,time()+84000*30,"/");
						 $username=$row["uname"];
						 $sql="update login_system set login='$cook' where uname='$username'";
	                     if($this->conn->query($sql)===TRUE)
	                        {
							   
	                           header('Location:profile.php');
							   exit();
			
	                        }
						  	
						 
					   }					
				   }
				  if($check=="no") 
				    {
						
					 $_SESSION["login_field"]="yes";
					 header('Location:login.php');
					 exit();
					 			
	
					
					}
			   
			   }			
		 
		 }
	   
	 
}


 if($_SERVER["REQUEST_METHOD"]!=="POST")
 {
	   trigger_error("the method of login form is not post",E_USER_ERROR);
	   exit();
 }
else
     {
	  $obj=new login($_REQUEST["box_id"],$_REQUEST["box_pass"]);
      $obj->connection();
	 }
	 


?>