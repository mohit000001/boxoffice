<?php
function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
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
		    if($_FILES["profile_pic"]["size"]>100000)
			 {
			   trigger_error("the size of uploaded image is greater then 1 MB so it is not allow , you have to upload image under 1 MB size");
			   session_start();
              $_SESSION["pic_upload_error"]=4;
              header('Location:signin_next.php');
			 }
		   else{
		      $this->upload();
		   }
		 }
		 else
		 {
		   trigger_error("image uploaded is not an image");
		   session_start();
            $_SESSION["pic_upload_error"]=4;
            header('Location:signin_next.php');
		 }
		 
	}
  
    function upload()
	{
	  if($this->image_type!="jpg"&&$this->image_type!="png")
	   {
	      trigger_error("the type of image is not matching with our polices ,you have to upload a image which have JPG OR PNG");
	   }
	  else
	  {
	     $username=$_COOKIE["boxoffice_signin"];
		 $myarr=explode(",",$username);
	    $this->conn=new mysqli("mysql","user","saxud3sldnb","boxoffice");
		$path=$_FILES["profile_pic"]["tmp_name"];
		$img=addslashes(file_get_contents($path));
		$sql="update user_profile_data set profile_pic='$img' where uname='$myarr[0]'";
		if($this->conn->query($sql)===TRUE)
		  {
		    header('Location:signin_next_next.php');
		  }
		 else
          {
		     trigger_error($this->conn->error);
			 session_start();
             $_SESSION["pic_upload_error"]=4;
             header('Location:signin_next.php');
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
 trigger_error("the method of sumbiting from of profile pic is not post");
  session_start();
  $_SESSION["pic_upload_error"]=4;
  header('Location:signin_next.php');
} 
$obj->image_validation();
?>