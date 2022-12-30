<?php
 session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR </b>: [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
}
 class database_mangement
 {
      protected $host="mysql";
      protected $user="user";
      protected $pass="saxud3sldnb";
      protected $db="boxoffice";
      protected $conn;
 
 }
 class account extends database_mangement
 {
     private $fname,$lname,$uname,$email,$password,$gen,$da,$mon,$ye,$add_line1,$add_line2,$pin,$cou,$sta,$city,$mob_num,$tc;
     
     function __construct($f,$l,$u,$e,$p,$g,$d,$mo,$y,$ad1,$ad2,$pi,$c,$s,$ci,$mob,$t)
             
     {
         $this->fname=$f;
         $this->lname=$l;
         $this->uname=$u;
         $this->email=$e;
         $this->password=$p;
         $this->gen=$g;
         $this->da=$d;
         $this->mon=$mo;
         $this->ye=$y;
         $this->add_line1=$ad1;
         $this->add_line2=$ad2;
         $this->pin=$pi;
         $this->cou=$c;
         $this->sta=$s;
         $this->city=$ci;
         $this->mob_num=$mob;
         $this->tc=$t;
       
         
     }
     function normal_validation()
     {
        $this->fname=$this->test($this->fname);
        $this->lname=$this->test($this->lname);
        $this->uname=$this->test($this->uname);
        $this->email=$this->test($this->email);
        $this->password=$this->test($this->password);
        $this->gen=$this->test($this->gen);
        $this->da=$this->test($this->da);
        $this->mon=$this->test($this->mon);
        $this->ye=$this->test($this->ye);
        $this->add_line1=$this->test($this->add_line1);
        $this->pin=$this->test($this->pin);
        $this->cou=$this->test($this->cou);
        $this->sta=$this->test($this->sta);
        $this->city=$this->test($this->city);
        $this->mob_num=$this->test($this->mob_num);
        $this->tc=$this->test($this->tc);
         
        $this->full_validation();
              
         
     }
    function test($data)
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
           
           $_SESSION["tech_error"]="yes";
           header('Location:signin.php');
		   trigger_error("something is empty in signin form",E_USER_ERROR);
	       EXIT();
        }
                
   }
     
   function full_validation()
   {
       if(!preg_match("/^[A-Za-z]+$/",$this->fname)||strlen($this->fname)>15||!preg_match("/^[A-Za-z]+$/",$this->lname)||strlen($this->lname)>15||strlen($this->uname)<5||strlen($this->uname)>10||!filter_var($this->email,FILTER_VALIDATE_EMAIL)||!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$this->password)||$this->password==""||strlen($this->password)>15||$this->gen==""||$this->mon==""||$this->add_line1==""||!preg_match("/^[0-9]+$/",$this->pin)||strlen($this->pin)>10||$this->cou==""||!preg_match("/^[0-9]+$/",$this->mob_num)||strlen($this->mob_num)!==10||tac=="false")
       {
           $_SESSION["tech_error"]="yes";
           header('Location:signin.php');
		   trigger_error("something is not get validating properly in signin form on server-side",E_USER_ERROR);
		   EXIT();
       }
      else
      
	  {
             $this->conn=new mysqli($this->host,$this->user,$this->pass,$this->db);
       
            if ($this->conn->connect_error)
              {
                 $_SESSION["tech_error"]="yes";
                 header('Location:signin.php');
				 trigger_error($this->conn->connect_error,E_USER_ERROR);
				 EXIT();
                }  
             $sql="select uname,email,mobile_number from user_profile_data";
             $result=$this->conn->query($sql);
	         $check=0;
	          if ($result->num_rows<1)
	           {
	             trigger_error("doen't fetched any row from mysql dtatbase",E_USER_ERROR);
				 EXIT();
	            }
	 
             
                 while($data=$result->fetch_assoc())
				   {
				        if($data["uname"]==$this->uname||$data["email"]==$this->email||$data["mobile_number"]==$this->mob_num)
						  {
						    $check=1;
							break;
						  }
						  
				   
				   }
                  	if($check==1)
                     {
					  
					   $_SESSION["tech_error"]="yes";
                       header('Location:signin.php');
					  // trigger_error("username or email or mobile is already exist",E_USER_ERROR);
					   EXIT();
                      }
                    else
                    {					
                       $this->cookei_pro();  
                    }
	  }
    
           
   }
     
   function create_profile()
   {
       $ad=$this->add_line1.",".$this->add_line2;
       $date=$this->ye."-".$this->mon."-".$this->da;
	   date_default_timezone_set("Indian/Antananarivo");
	   $ac_date=date("Y-m-d h:i:s");
	   
       $sql="INSERT INTO user_profile_data(fname,lname,uname,email,password,gender,dob,address_line,pincode,country,state,city,mobile_number,tanc,ac_status,acc_date) VALUES('$this->fname','$this->lname','$this->uname','$this->email','$this->password','$this->gen','$date','$ad','$this->pin','$this->cou','$this->sta','$this->city','$this->mob_num','$this->tc','unactivate','$ac_date')";
       
       if ($this->conn->query($sql) === TRUE) 
       {
           
           header('Location:signin_next.php');
		   $this->conn->close();
		   exit();
       } 
       else 
       {
           $_SESSION["tech_error"]="yes";
           header('Location:signin.php');
		   trigger_error($this->conn->error,E_USER_ERROR);
		   EXIT();
       }
  
       $this->conn->close();
	   EXIT();
       
   }
   
   function cookei_pro()
   {
       
	   
	   
        $cookie_value=$this->uname.",".$this->mob_num."boxoffice_signin_identification_secure";
		
        setcookie("boxoffice_signin",$cookie_value,time()+600,"/");
		
		$sql="insert into login_system(uname,signin) values('$this->uname','$cookie_value')";
		//if(isset($_COOKIE["boxoffice_signin"]))
		//{
          if($this->conn->query($sql) === TRUE)
		   {
		
		     $this->create_profile();
	    	}
			else
			 { 
               $_SESSION["tech_error"]="yes";
               header('Location:signin.php');
			   trigger_error("server side signin cookie has  not been created",E_USER_ERROR);
			   exit();
			 }
		//}
		/*else
		{
		  trigger_error("client side signin cookie has  not been created");
		  session_start();
          $_SESSION["tech_error"]="yes";
          header('Location:signin.php');
		}*/
   }
       
 }
     
    


 set_error_handler("boxoffice_error_report");

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  $obj= new account($_REQUEST['firstname'],$_REQUEST['lname'],$_REQUEST['user_name'],$_REQUEST['email'],$_REQUEST['pass1'],$_REQUEST['sex'],$_REQUEST['date'],$_REQUEST['month'],$_REQUEST['year'],$_REQUEST['add1'],$_REQUEST['add2'],$_REQUEST['pincode'],$_REQUEST['country'],$_REQUEST['state'],$_REQUEST['city'],$_REQUEST['mobile'],$_REQUEST['tc_accept']);
 }

else
{
    
   
    $_SESSION["tech_error"]="yes";
    header('Location:signin.php');
	trigger_error("The method of signin form is not POST",E_USER_ERROR);
	exit();
}

$obj->normal_validation();

?>