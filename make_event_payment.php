<?php
libxml_use_internal_errors(true);
         $xml=simplexml_load_file("event_xml.xml");
        if($xml===false)
       {
	     echo "failed to load xml data";
		  foreach(libxml_get_errors as $error)
		    {
			   echo "<br>",$error->message;
			  
			}
	
	    }
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
if(isset($_REQUEST["event"]))
{
  if($_REQUEST["event"]=="mumbai"||$_REQUEST["event"]=="pune"||$_REQUEST["event"]=="nagpur"||$_REQUEST["event"]=="jaipur")
  {
  
  }
  else
  {
    header('Location:login.php');
	exit(); 
  }

}
else{
 header('Location:events.php');
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
	     //trigger_error("sql doesn't fetch any row from boxoofice data for login verification",E_USER_ERROR);
	     exit();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
	   header('Location:login.php');
	   mysqli_close($conn);
	   exit();
	   
     }
	 mysqli_close($conn); 
}  
 
else
{
       header('Location:login.php');
	   mysqli_close($conn);
	   exit();
}


$conn=new mysqli("mysql","user","saxud3sldnb","boxoffice");

$username=$_COOKIE["boxoffice_login"];
$myarr=explode(',',$username);

$sql="select ac_status,fname,lname,gender,dob,mobile_number,email,pincode from user_profile_data where uname='$myarr[0]'";

$r=$conn->query($sql);
$row = $r->fetch_assoc();

 if($row["ac_status"]!=="activate") 
  {
    $_SESSION["event_ac_warning"]="yes";
	header('Location:events.php');
	$conn->close();
    exit();
	
  }
$conn->close(); 
 
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
$name=$xml->children()->$_REQUEST["event"]->name;
$dat=$xml->children()->$_REQUEST["event"]->dat;
$mya=explode("-",$dat);
$org_date=$mya[2]."-".$mya[1]."-".$mya[0];
$city=$xml->children()->$_REQUEST["event"]->city;
$state=$xml->children()->$_REQUEST["event"]->state;
$place=$xml->children()->$_REQUEST["event"]->place;
$ff=$xml->children()->$_REQUEST["event"]->fee;

date_default_timezone_set("Indian/Antananarivo");
$app_dat=date("Y-m-d h:i:s");
$sql="INSERT INTO event_histroy(uname,event_name,event_date,apply_date,city,state,fee,event_place,pay_status) values('$myarr[0]','$name','$org_date','$app_dat','$city','$state','$ff','$place','done')"; //,event_name,event_date,apply_date,city,state,fee,event_place,fee,pay_status) VALUES('$myarr[0]','$name','$org_date','$app_dat','$city','$state','$place','$ff','done')";

if(mysqli_query($conn,$sql))//
 { 
   header('Location:histroy.php');
   exit();
 }
 else
 {    
      $per=$_REQUEST["event"];
      $_SESSION["server_side_event_apply_error"]="yes";
	  echo "<a href='apply_event.php?event=".$per."' id='test'></a>";
	  echo "<script>document.getElementById('test').click();</script>";
     // header("Location:apply_event.php?event=jaipur");
	  trigger_error("last query doesn't executed",E_USER_ERROR);
	  exit();
 }

mysqli_close($conn);
exit();
/*class event_data
 {
    protected $xml,$conn,$event,$name,$dat,$app_dat,$city,$state,$place,$ff;
	
	function __construct($e)
	  {
	    $this->event=$e;
	  
	  }
	function xml_cre()
	 {
	    
	 
	   $this->start_pro();
	 }
	function insert_data()
	 {
	   $conn= new mysqli("mysql","user","saxud3sldnb","boxoffice");
	    
		if($this->conn->connect_error)
		  {
		    $_SESSION["server_event_error"]="yes";
			header('Location:applt_event.php');
			trigger_error($this->conn->connect_error,E_USER_ERROR);
		  
		  }
		 ELSE
          {
		    date_default_timezone_set("Indian/Antananarivo");
	        $this->app_dat=date("Y-m-d h:i:s");
		    $sql="insert into event_histroy(uname,event_name,event_date,apply_date,city,state,fee,event_place,fee,pay_status) values('$myarr[0]','$this->name','$this->dat','$this->app_dat','$this->city','$this->state','$this->place','$this->ff','cnf')";
		    
			 if($this->conn->query($sql)===TRUE)
			   {
			     $this->conn->close();
			     header('Location:history.php');
			   }
			  else
                 {
				   $_SESSION["server_event_error"]="yes";
		           header('Location:applt_event.php');
			       trigger_error("last query not executed",E_USER_ERROR);
				    
				 }			  
		  }		 
	 
	 }
    function start_pro()
	 {
	   
	   $this->name=$xml->children()->$this->event->name;
	   $this->dat=$xml->children()->$this->event->dat;
	   $this->city=$xml->children()->$this->event->city;
	   $this->state=$xml->children()->$this->event->state;
	   $this->place=$xml->children()->$this->event->place;
	   $this->ff=$xml->children()->$this->event->fee;
	   $this->insert_data();
	 }
 
    
 }
 
 $obj=new event_data($_REQUEST["event"]);
 $obj->xml_cre();*/

?>