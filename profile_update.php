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
	    // trigger_error("sql doesn't fetch any row from boxoofice data for login verification",E_USER_ERROR);
	    exit();
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
       header('Location:login.php');
	   exit();
     }
}  
 
else
{
  header('Location:login.php');
  exit();
}

class custum_expection extends Exception  
  {
         public function error_message()
		 {
		     $errmess="ERROR  : on line <b>".$this->getline()."</b> in <mark>".$this->getfile()."</mark> MESSAGE : <b>".$this->getmessage();
		
			 error_log($errmess,3,"serverside_error_report.log");
			 return $errmess;
		 }
       
  }


class update_profile
{
     private $conn,$uname,$mail,$mob,$add1,$add2,$pin,$cou,$sta,$city,$nname,$hc,$jc,$edu,$lang,$cw,$reli,$rela,$abo;
	 
	 function __construct($m,$mo,$a1,$a2,$p,$co,$st,$ci,$nn,$h,$j,$ed,$l,$c,$ri,$ra,$ab)
	  {
	      $this->mail=$m;
		  $this->mob=$mo;
		  $this->add1=$a1;
		  $this->add2=$a2;
		  $this->pin=$p;
		  $this->cou=$co;
		  $this->sta=$st;
		  $this->city=$ci;
		  $this->nname=$nn;
		  $this->hc=$h;
		  $this->jc=$j;
		  $this->edu=$ed;
		  $this->lang=$l;
		  $this->cw=$c;
		  $this->reli=$ri;
		  $this->rela=$ra;
		  $this->abo=$ab;
	  
	  
	  }
    function start_val()
	  {
	    $this->mail=$this->test_spe($this->mail);
		$this->mob=$this->test_spe($this->mob);
		$this->pin=$this->test_spe($this->pin);
		$this->add1=$this->test_spe($this->add1);
		$this->add2=$this->test($this->add2);
		$this->cou=$this->test_spe($this->cou);
		$this->sta=$this->test_spe($this->sta);
		$this->city=$this->test_spe($this->city);
		$this->nname=$this->test($this->nname);
		$this->hc=$this->test($this->hc);
		$this->jc=$this->test($this->jc);
		$this->edu=$this->test($this->edu);
		$this->lang=$this->test($this->lang);
		$this->cw=$this->test($this->cw);
		$this->reli=$this->test_spe($this->reli);
		$this->rela=$this->test_spe($this->rela);
		$this->abo=$this->test($this->abo);

	    $this->full_val();
	  }
	function test_spe($data)
    {
       
	       if(!empty($data))
            {
              $data=trim($data);
              $data=stripslashes($data);
              $data=htmlspecialchars($data);
              return $data;
			  
		
            }
          else
           {
	          $_SESSION["server_side_update_error"]="yes";
              header('Location:update_profile.php');
			  trigger_error('something is black',E_USER_ERROR);
			  exit();
           
            }
    }	
		 
                
   
   
   function test($data)
    {
              
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;          
      } 
   
   public function full_val()
   {
      if(filter_var($this->mail,FILTER_VALIDATE_EMAIL)&&preg_match("/^[0-9]+$/",$this->pin)&&strlen($this->pin)<11&&preg_match("/^[0-9]+$/",$this->mob)&&strlen($this->mob)==10&&strlen($this->add1)<50&&strlen($this->add2)<50&&strlen($this->nname)<30&&strlen($this->hc)<50&&strlen($this->jc)<50&&strlen($this->edu)<50&&strlen($this->lang)<30&&strlen($this->cw)<30&&strlen($this->abo)<500&&$this->sta!=="select state"&&$this->city!=="select state")
        {
            $this->conn=new mysqli("mysql","user","saxud3sldnb","boxoffice");
       
            if ($this->conn->connect_error)
              {
                
		         $_SESSION["server_side_update_error"]="yes";
                 header('Location:update_profile.php');
				 trigger_error($this->conn->connect_error,E_USER_ERROR);
				 EXIT();
                }  
             $sql="select email,mobile_number from user_profile_data";
             $result=$this->conn->query($sql);
	         $check_pro=0;
	          if ($result->num_rows<1)
	           {
			     $_SESSION["server_side_update_error"]="yes";
                 header('Location:update_profile.php');
	             trigger_error("doen't fetched any row from mysql dtatbase",E_USER_ERROR);
				 EXIT();
	            }
	           
               $username=$_COOKIE["boxoffice_login"];
               $myarr=explode(',',$username);

               $sql_temp="select email,mobile_number from user_profile_data where uname='$myarr[0]'";
			   $result_temp=$this->conn->query($sql_temp);
			   $data_temp=$result_temp->fetch_assoc();
			   $user_mail=$data_temp["email"];
			   $user_mobile=$data_temp["mobile_number"];
                 while($data=$result->fetch_assoc())
				   {
				        if($data["email"]==$this->mail)
						  {
						    if($data["email"]==$user_mail)
							  {
							  
							  }
							 else
                             {							
						      $check_pro=1;
							  break;
						      }
						  }
						if($data["mobile_number"]==$this->mob)  
						  {
						     if($data["mobile_number"]==$user_mobile)
							  {
							  
							  }
							 else
                              {
							    $check_pro=1;
							    break; 
							  }							 
						    
						  }
				   
				   }
                  	if($check_pro==1)
                     {
					   
					   $_SESSION["server_side_update_error"]="yes";
                       header('Location:update_profile.php');
					   trigger_error("username or email or mobile is already exist",E_USER_ERROR);
					   EXIT();
                      }
                    else
                    {					
                       $this->insert_updation_into_database();  
                    }
	  
		   
		}
	   else
         {
             
	         $_SESSION["server_side_update_error"]="yes";
             header('Location:update_profile.php');
			 trigger_error("sumbited info is not properly validated on server side",E_USER_ERROR);
			 EXIT();
		 
		 }	
		 
   }
  function  insert_updation_into_database()
    {
	   
	     
		  
		      $mya=explode(",",$_COOKIE["boxoffice_login"]);
			  $this->uname=$mya[0];
			  $address=$this->add1.",".$this->add2;
		      $sql="update user_profile_data set email='$this->mail',mobile_number='$this->mob',address_line='$address',pincode='$this->pin',country='$this->cou',state='$this->sta',city='$this->city',nname='$this->nname',shcool='$this->hc',j_college='$this->jc',education='$this->edu',lang='$this->lang',cwork='$this->cw',religion='$this->reli',rstatus='$this->rela',about='$this->abo' where uname='$this->uname'";
		      
				    if($this->conn->query($sql)===TRUE)
					  {
					    header('Location:profile.php');
						EXIT();
					  }
				    else
					 {
					     
	                     $_SESSION["server_side_update_error"]="yes";
                         header('Location:update_profile.php');
						 trigger_error("Everthing goes correctly only last query doesn't executed",E_USER_ERROR);
						 EXIT();
					 }
				
				
				 
		  
	    
		
	}
   
}


    if($_SERVER["REQUEST_METHOD"]!=="POST")
	  {
	   
	    $_SESSION["server_side_update_error"]="yes";
        header('Location:update_profile.php');
		trigger_error("the method of sumbiting updation form is not post",E_USER_ERROR);
		exit();
	  }
    else
	 {
	   $obj=new update_profile($_REQUEST["mail"],$_REQUEST["mob_no"],$_REQUEST["add1"],$_REQUEST["add2"],$_REQUEST["pin"],$_REQUEST["country"],$_REQUEST["state"],$_REQUEST["city"],$_REQUEST["nick_name"],$_REQUEST["high_shcool"],$_REQUEST["j_college"],$_REQUEST["bach_education"],$_REQUEST["lang"],$_REQUEST["currtent_work"],$_REQUEST["religion"],$_REQUEST["relationship"],$_REQUEST["self_info"]);
	   $obj->start_val();
	 }





?>