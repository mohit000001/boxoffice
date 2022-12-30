<?php
 session_start();
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
	EXIT();
 }
 $username=$_COOKIE["boxoffice_login"];
 $myarr=explode(',',$username);

 $sql="select login from login_system where uname='$myarr[0]'";
 $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)<1)
	 {
	     //trigger_error("sql doesn't fetch any row from boxoofice data for signin verification");
	     EXIT();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
       header('Location:login');
	    mysqli_close($conn);
	   EXIT();
     }
}  
else
{
  header('Location:login.php');
  mysqli_close($conn);
  EXIT();
  }
class upload_image
{
    private $conn,$image_type,$check;
	
	
	function image_validation()
	{
	   $this->image_type=pathinfo($_FILES["profile_pic"]["name"],PATHINFO_EXTENSION);
	   $this->check=getimagesize($_FILES["profile_pic"]["tmp_name"]);
	   if($this->check!==false)
	     {
		    if($_FILES["profile_pic"]["size"]>1000000)
			 {
			   
			   $_SESSION["pic_upload_error"]=1;
			   header('Location:update_profile_pic_with_logined.php');
			  // trigger_error("the size of uploaded image is greater then 1 MB so it is not allow , you have to upload image under 1 MB size",E_USER_ERROR);
			  exit();
			 }
		   else{
		      $this->upload();
		   }
		 }
		 else
		 {
		      
		    
			   $_SESSION["pic_upload_error"]=2;
			   header('Location:update_profile_pic_with_logined.php');
			   //trigger_error("image uploaded is not an image",E_USER_ERROR);
			   exit();
		 }
		 
	}
  
    function upload()
	{
	  if($this->image_type!="jpg"&&$this->image_type!="png")
	   {
			   $_SESSION["pic_upload_error"]=3;
			   header('Location:update_profile_pic_with_logined.php');
			   //trigger_error("the type of image is not matching with our polices ,you have to upload a image which have JPG OR PNG",E_USER_ERROR);
	           exit();
	  }
	  else
	  {
	     $username=$_COOKIE["boxoffice_login"];
		 $myarr=explode(",",$username);
		 $location="profile_pics/";
         $tar_file=$location.$myarr[0].".".$this->image_type;
		if(move_uploaded_file($_FILES["profile_pic"]["tmp_name"],$tar_file))
		  {
		    header('Location:profile.php');
			exit();
		  }
		 else
          {
		     
			
			  $_SESSION["pic_upload_error"]=4;
			  header('Location:update_profile_pic_with_logined.php');
			  trigger_error("everything goes correctly, however profile pic doesn't uploaded",E_USER_ERROR);
			  exit();
		  }		 
	  }
	}


}
set_error_handler("boxoffice_error_report");

if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $obj=new upload_image;
  
  }
 else
{
 
  $_SESSION["pic_upload_error"]=4;
  header('Location:update_profile_pic_with_logined.php');
  trigger_error("the method of sumbiting from of profile pic is not post",E_USER_ERROR);
  exit();
} 
$obj->image_validation();
?>