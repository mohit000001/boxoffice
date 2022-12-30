
<?php
ob_start();
/*header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s"). "GMT");
header("Cachec-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0",false);
header("Pragma: no-cache");
clearstatcache();
header("Content-Type: application/xml; charset=utf-8");*/
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

set_error_handler("boxoffice_error_report");
function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR </b>: [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
}
?>
<!DOCTYPE html>
<html lang="US-en">   
  <head>
     <title>welcome to boxoffice</title>
     <meta name="viewport" content="width=device-width,initail-scale=1"/> 
	  


     <script src="jquery-3.0.0.js"></script> 
         
      <link rel="stylesheet" href="bootstrap.min.css" media="all" type="text/css"/>
         
      <script src="bootstrap.min.js"></script>
         
         
         
     <link href="mainstylesheet.css" rel="stylesheet" media="all" type="text/css"/>  
         
         <link href="home_top_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
		 <link href="sigin_logout_specail.css" rel="stylesheet" media="all" type="text/css"/>
         
         <link href="profile_middle_bar.css" rel="stylesheet" media="all" type="text/css"/>
         <link href="home_bottom_bar.css" rel="stylesheet" media="all" type="text/css"/> 
        
      <script src="notification_text_animation.js"></script>
      
      <script src="threter_animation.js"></script>
	  
	<script src="profile.js"></script>
	 
	   <script src="navigation_changing.js"></script>
		 
	  <script src="anymouse_changing.js"></script>	
         
     <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
         
     <meta name="discription" content="boxoffice is a film production company which make bollywood movies"/>
         
     <meta name="keyword" content="boxoffice,bollywood movies,movie,film,film production"/>
         
     <meta name="robots" content="index"/>
         
     <meta name="robots" content="follow"/>
         
     <meta name="developer" content="RAJ"/>
         
</head>
      
<body onload="notification_text_animation(),anymouse_user()">
<div class="top">
     <marquee>Welcome to Box office Film Production house, This is the officail website of Box office here you can book all type of events and shows and Movies which make by Box office</marquee> 
     <img style="padding:20px; float:left;" src="Box-Office-Logo-ONLINE.png" height="150px" width="250px" alt="boxoffice"/>
     
          <!-- <i class="sitelogo">BOX OFFICE</i>-->
     <div class="top_middle">
     <div id="socail_links">
        
         <a href="facebook.com" target="_blank"><img class="img-circle" src="facebook.jpg" height="20px" width="30px" alt="box office facebook page"/> </a>
         
         <a href="twitter.com" target="_blank"> <img class="img-circle" src="twitter.jpg" height="20px" width="30px" alt="box office facebook page"/> </a> 
         
         <a href="google.com" target="_blank"> <img class="img-circle" src="google.jpg" height="20px" width="30px" alt="box office facebook page"/>  </a>
         
         <a href="whatsapp.com" target="_blank"> <img class="img-circle" src="whatsapp.png" height="20px" width="30px" alt="box office facebook page"/>  </a>
         
        <img class="line" src="line.png" width="300px" alt="white line"/> 
         
         <form enctype="text/plain" name="search_box" accept-charset="UTF-8" autocomplete="on" method="get" action="search_inbox_result.php">
             <input id="search" type="text" placeholder="search your thing" name="search_keyword" size="35">
             <button type="submit" class="submit_button">Search</button>
         </form>
     </div>
         
     </div> 
     
     <div class="animation">
         
         <img style="padding:12px;" alt="animation of website" height="100px" width="150px" src="movie1.jpeg" id="threter1"/>
         
         <img style="padding:12px;" alt="animation of website" height="100px" width="150px" src="movie2.jpg" id="threter2"/>
         
         <img style="padding:12px;" alt="animation of website" height="100px" width="150px" src="movie3.jpg" id="threter3"/>
         
         </div>
     
     
     
     <nav>
         <ul>
             <li><a href="Home.html">HOME</a></li>
             <li><a href="about-us.html">ABOUT US</a></li>
             <li><a href="contact-us.html">CONTACT US</a></li>
             <li><a href="gallary.html">GALLARY</a></li>
             <li><a href="event.html">EVENTS</a></li>
             <li><a href="updates.html">Updates</a></li>  
             <li><a href="shows.html">Shows</a>
                 <ul>
                     <li><a href="dehli_show.html">Dehli</a>
                         <ul id="dehli_sub_menu">
                             <li><a href="newdehli.html">New Dehli</a></li>
                             <li><a href="olddehli.html">Old Dehli</a></li>
                             <li><a href="karolbag.html">Karolbag</a></li>
                             
                         </ul>
                     
                     </li>
                     <li><a href="mumbai_show">Mumbai</a>
                       <ul id="mumbai_sub_menu">
                             <li><a href="bandra.html">Bandra</a></li>
                             <li><a href="nareman.html">Nareman</a></li>
                             <li><a href="andheri.html">Andheri</a></li>
                             
                         </ul>
                     
                     </li>
                     <li><a href="nagpur_show">Nagpur</a>
                          <ul id="nagpur_sub_menu">
                             <li><a href="bardi.html">Bardi</a></li>
                             <li><a href="civilline.html">Civil line</a></li>
                             <li><a href="mahal.html">Mahal</a></li>
                             
                         </ul>
                     
                     </li>
                     <li><a href="jaipur_show">Jaipur</a></li>
                     <li><a href="pune_show">Pune</a></li>
                 </ul>     
                 </li>
             <li><a href="Join.html">Bookings</a>
                 <ul>
                     <li style="width:86px;"><a href="book_movie.html">Movies</a></li>
                     <li style="width:86px;"><a href="book_song.html">Songs</a></li>
                     <li style="width:86px;"><a href="book_music.html">Music</a></li>
                 </ul>     
            </li>          
             <li><a href="Join.html">Join</a></li>
          
             
        </ul>
     </nav> 
	 
	 
     <div class="animation1"><img src="vvv.jpg" width="568px" height="205px" alt="animation of website"/>
     </div> 
	 
	 
     <a href="logout.php"><button class="login_button" type="button">logout</button></a>
     <a href="signin.php"><button class="signin_button" type="button">create new account</button></a>
    
      
 </div>

<div class="middle">
     
  
     <div class="left"> 
     
         <div class="notification_box">Notification</div><br>
         
         <div class="notification_text_box">
             
         <div class="notification_text" id="notification_text">this is hte box office officail website
         this is hte box office officail website this is hte box office officail website
        this is hte box office officail website this is hte box office officail website
        this is this is hte box office officail website
        office officail website
        this is this is hte box office officail website
             office officail website
            mohit is king officail website
         this is hte box office officail website this is hte box office officail website
        this is hte box office officail website this is hte box office officail website
        this is this is hte box office officail website
        office officail website
        this is this is hte box office officail website
              office officail website
            
             </div>
             
         </div>
         
         <div style="background-color:aliceblue; position:relative; padding-top:20px; padding-left:5px; ">
             <a href="advertise.com"><img style="position:relative;" src="add_2.jpg" height="450px" width="155px" alt="advertisement"/></a></div>
     
     </div>
  <div class="midd">

      <a href="update_profile.php"><button class="update_button" type="button">Update Profile</button></a>
	  <div id="conform_account_notice">YOUR ACCOUNT IS NOT CONFORM PLESE CONFORM IT FIRST TO ACCESS ALL THE FEATURES OF BOX OFFICE <a href="account_conformation.php">click here to conform your account</a></div>
<?php   
class profile
{
  protected $conn,$username,$cook,$ac_con;
  
   public static $fname,$lname,$nname,$mail,$dob,$gen,$add,$cou,$sta,$city,$pin,$mob,$shcool,$jcollege,$edu,$lang,$cw,$reli,$rela,$abo,$ac_sta,$ac_dat,$dob_year,$dob_mon,$dob_day,$ac_year,$ac_mon;
   
  public function connection()
     {
	    $this->conn=new mysqli("mysql","user","saxud3sldnb","boxoffice");
		
		 if($this->conn->connect_error)
		   {
		     trigger_error($this->conn->connect_error,E_USER_ERROR);
			 EXIT();
		   }
	 
	 
	 }
	public function check_login()
     {
	   if(isset($_COOKIE["boxoffice_login"]))
	  {
	   $this->username=$_COOKIE["boxoffice_login"];
	   $myarr=explode(",",$this->username);
	   $this->username=$myarr[0];
	   $sql="select login from login_system where uname='$this->username'";
	   $r=$this->conn->query($sql);
	   $row=$r->fetch_assoc();
	   if($row["login"]!==$_COOKIE["boxoffice_login"])
	     {
		   header('Location:login.php');
		   $this->conn->close();
		   exit();
		  
		 }
		else
         {
		   echo "<script>change_navigation_options();</script>";
		 }		
	   }
	  else
        {
		 header('Location:login.php');
		 $this->conn->close();
		 exit();
		}	  
	 
	 }
  public function ac_sat()
      {
	    
	    
	    $sql="select ac_status from user_profile_data where uname='$this->username'"; 
	    $r=$this->conn->query($sql);
	    $row=$r->fetch_assoc();
		 if($row["ac_status"]!=="activate")
		  {
		     echo "<script>ac_warnnin();</script>";
		  }
        		 
		
	  }	
  public function get_data()
    {
	   
      $sql="select fname,lname,email,nname,gender,dob,pincode,address_line,country,state,city,mobile_number,shcool,j_college,education,lang,cwork,religion,rstatus,about,acc_date,ac_status from user_profile_data where uname='$this->username'";

     $result=$this->conn->query($sql);
	  
	  if ($result->num_rows<1)
	  {
	    trigger_error("doen't fetched any row from mysql dtatbase",E_USER_ERROR);
		$this->conn->close();
		EXIT();
	  }
	 
     $data=$result->fetch_assoc();
	 profile::$fname=$data["fname"];
	 profile::$lname=$data["lname"];
	 profile::$nname=$data["nname"];
	 profile::$mail=$data["email"];
	 profile::$dob=$data["dob"];
	 $mya=explode("-",profile::$dob);
	 profile::$dob_year=$mya[0];
	 profile::$dob_mon=$mya[1];
	 profile::$dob_day=$mya[2];
	 profile::$gen=$data["gender"];
	 profile::$pin=$data["pincode"];
	 profile::$add=$data["address_line"];
	 profile::$cou=$data["country"];
	 profile::$sta=$data["state"];
	 profile::$city=$data["city"];
	 profile::$mob=$data["mobile_number"];
	 profile::$shcool=$data["shcool"];
	 profile::$jcollege=$data["j_college"];
	 profile::$edu=$data["education"];
	 profile::$lang=$data["lang"];
	 profile::$cw=$data["cwork"];
	 profile::$reli=$data["religion"];
	 profile::$rela=$data["rstatus"];
	 profile::$fname=$data["fname"];
	 profile::$abo=$data["about"];
	 profile::$ac_sta=$data["ac_status"];
	 profile::$ac_dat=$data["acc_date"];
	 $myaaa=explode("-",profile::$ac_dat);
	 profile::$ac_year=$myaaa[0];
	 profile::$ac_mon=$myaaa[1];
	}	
   
}
$obj=new profile();
$obj->connection();
$obj->check_login();
$obj->ac_sat();
$obj->get_data();
?>
	  
	  <div class="profile">
	
      <table>
	  
	    <tbody>
	  
	    <tr><td><a href="update_profile_pic_with_logined.php" class="edit_pic">edit profile pic</a> <img class="img-rounded" height="150px" width="150px" alt="profile ic" src="
		<?php 
		class ex extends profile 
		{	  
		 function dis() 
		  {  
		   if(isset($_COOKIE["boxoffice_login"]))
		   {
		   $this->username=$_COOKIE["boxoffice_login"];
	       $myarr=explode(",",$this->username);
	       $this->username=$myarr[0];
		   $path="profile_pics/".$this->username.".jpg";
		   if(file_exists($path))
		     {
			   echo $path;
			 }
		     else
              {
			      $path="profile_pics/black_profile_pic.jpg";
				  echo $path;
			  }	
            }			  
		  }	
		} 
		$og=new ex();
		$og->dis();
	?>
	   ">
		</td>  <td><span id="full_name"><?php echo profile::$fname; ?> <?php echo profile::$lname; ?></span><br><br><span id="bod_dyn">Date-of-birth : <span style="color:blue; text-decoration:underline;"><?php echo profile::$dob_day; ?> <?php switch(profile::$dob_mon){
          case "01": echo "Jan";
		  break;
		  
          case "02": echo "Feb";
		  break;
		  
		  case "03": echo "Mar";
		  break;
		  
		  case "04": echo "Apr";
		  break;
		  
		  case "05": echo "May";
		  break;
		  
		  case "06": echo "Jun";
		  break;
		  
		  case "07": echo "July";
		  break;
		  
		  case "08": echo "Aug";
		  break;
		  
		  case "09": echo "Sep";
		  break;
		  
		  case "10": echo "Oct";
		  break;
		  
		  case "11": echo "Nov";
		  break;
		  
		  case "12": echo "Dec";
		  break;
		  
		  default: echo "nothing";
		  break;
		  }
		?> <?php echo profile::$dob_year; ?></span></span><br> <br><span id="gender_dyn"> Gender : <span style="text-transform:capitalize;"><?php echo profile::$gen; ?></span></span></td></tr>
		
	    <tr id="about_sec"><td><span id="about">about : </td>
		
		<td id="about_text"><?php if(!empty(profile::$abo)) {echo profile::$abo;} else{ echo "<span style='font-size:20px;'>- - - - - - -  - - - - - - - </span>";} ?> </td></tr>
		
		<tr id="op_sec"><td><span id="op_info">Optional Info : </td>
		
		<td id="option_contain">Nick names :<br> <?php if(!empty(profile::$nname)) {echo profile::$nname;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?> <br><br>High shcool :<br> <?php if(!empty(profile::$shcool)) {echo profile::$shcool;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?><br><br>Jr. college : <br><?php if(!empty(profile::$jcollege)) {echo profile::$jcollege;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?><br><br>12<sup>th</sup>+ Education :<br> <?php if(!empty(profile::$edu)) {echo profile::$edu;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?> <br><br>Languages  :<br> <?php if(!empty(profile::$lang)) {echo profile::$lang; } else{ echo "<span style='font-size:20px'> _  _  _  _</span>";}?> <br><br>Cureent Work : <br><?php if(!empty(profile::$cw)) {echo profile::$cw;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?> <br><br>Religion : <?php  if(!empty(profile::$reli)){ echo profile::$reli;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?> <br><br>Relationship : <?php if(!empty(profile::$rela)){echo profile::$rela;} else{ echo "<span style='font-size:20px'> _  _  _  _</span>";} ?></td></tr>
		
		<tr id="re_sec"><td><span id="re_info">Required Info : </td>
		
		<td id="re_contain">Email : <span style="color:blue; text-decoration:underline;"><?php echo profile::$mail; ?></span><br><br>Mob_Num : <span style="color:blue; text-decoration:underline;"><?php echo profile::$mob; ?></span><br><br>Address : <?php echo profile::$add; ?><?php echo " ,".profile::$pin; ?><br><span id="specail_add" style="position:relative; text-transform:capitalize; left:60px;"><?php echo profile::$city; ?><?php echo " ,".profile::$sta; ?><?php echo " ,".profile::$cou; ?></span><br><br> </td></tr>
		
		<tr id="ac_sec"><td><span id="ac_info">Account Info : </td>
		
		<td id="ac_contain">Account status : <span style="color:blue; text-decoration:underline;"><?php echo profile::$ac_sta; ?></span><br><br>Box office User : Since <?php switch(profile::$ac_mon)
        {
		      case "01": echo "Jan";
		  break;
		  
          case "02": echo "Feb";
		  break;
		  
		  case "03": echo "Mar";
		  break;
		  
		  case "04": echo "Apr";
		  break;
		  
		  case "05": echo "May";
		  break;
		  
		  case "06": echo "Jun";
		  break;
		  
		  case "07": echo "July";
		  break;
		  
		  case "08": echo "Aug";
		  break;
		  
		  case "09": echo "Sep";
		  break;
		  
		  case "10": echo "Oct";
		  break;
		  
		  case "11": echo "Nov";
		  break;
		  
		  case "12": echo "Dec";
		  break;
		  
		  default: echo "nothing";
		  break;
		  
		  
		 }  
		?> <?php echo profile::$ac_year; ?></td></tr>
		
	    </tbody>
		
	  </table>
	  
	 </div> 
	  <hr id="op_line" style="background-color:black; padding:1px; display:none;"> 
	  <hr id="re_line" style="background-color:black; padding:1px; display:none;"> 
	  <hr id="ac_line" style="background-color:black; padding:1px; display:none;"> 
    </div>
    
  <div class="right">
     
       <div class="middle_right">
           <div class="upcoming_events">UPCOMING EVENTS</div>   
         <img style="padding:5px;" alt="animation of website" height="120px" width="200px" src="left_bar_1.jpg"/><br>
         <img style="padding:5px;" alt="animation of website" height="120px" width="200px" src="left_bar_2.jpg"/><br> 
         <img style="padding:5px;" alt="animation of website" height="120px" width="200px" src="left_bar_3.jpg"/><br>
         <img style="padding:5px;" alt="animation of website" height="120px" width="200px" src="left_bar_4.jpg"/>
         </div>
     
      <div style="background-color:aliceblue; position:relative; padding-top:40px;  ">
             <a href="advertise.com"><img style="position:relative;" src="add_3.jpg" height="370px" width="210px" alt="advertisement"/></a></div>
      
     </div>
 </div>

<div class="bottom">
     
     <div class="footer_1">
         <span style=" font-family: Century Schoolbook;  color:lightblue; font-size:18px; font-weight:500; border-bottom:solid 2px #9C9C9C; padding:15px; letter-spacing:2px;">OUR STDUIOS</span><br>
         <ol>
             <li>Dehli    - New Dehli</li>
             <li>Dehli    - Santi Nagar</li>
             <li>Mumbai   - Bandra</li>
             <li>Mumbai   - Andheree</li>
             <li>Nagpur   - Mahal</li>
             <li>Hydrabad - Amreepeth</li>
             <li>Kolkata  - Civil Lines</li>
             <li>Pune     - Bardi</li>
             <li>Jaipur   - Pink City</li>
         </ol>
     </div>
     
     <img style="position:relative; bottom:210px; left:480px;" src="boxoffice-footer.png" height="100px" width="200px" alt="box office logo"/> 
     
     <div class="footer_2">
         
         <span style=" font-family: Century Schoolbook;  color:lightblue; font-size:18px; font-weight:500; border-bottom:solid 2px #9C9C9C; padding:15px; letter-spacing:2px;">FOLLOW US ON SOCAIL SITES</span><br>
         <a href="facebook.com" target="_blank"><img style="margin:30px;" class="img-rounded" src="facebook.jpg" height="25px" width="35px" alt="box office facebook page"/> </a>
         
         <a href="twitter.com" target="_blank"> <img style="margin:30px;" class="img-rounded" src="twitter.jpg" height="25px" width="35px" alt="box office facebook page"/> </a> 
         
         <a href="google.com" target="_blank"> <img style="margin:30px;" class="img-rounded" src="google.jpg" height="25px" width="35px" alt="box office facebook page"/>  </a>
         
         <a href="whatsapp.com" target="_blank"> <img style="margin:30px;" class="img-rounded" src="whatsapp.png" height="25px" width="35px" alt="box office facebook page"/>  </a>
     </div>
     
     <div class="footer_3">
        <span style=" font-family: Century Schoolbook;  color:lightblue; font-size:18px; font-weight:500; border-bottom:solid 2px #9C9C9C; padding:15px; letter-spacing:2px;">BOX OFFICE DEALS WITH</span><br> 
          <ol>
             <li>Bollywood Movies</li>
             <li>Hollywood Movies</li>
             <li>Tollywood Movies</li>
             <li>Bollywood Movies Songs</li>
             <li>Album Songes</li>
             <li>VeVo Music</li>
             <li>PC Games Music</li>
             <li>Application Sounds</li>
             <li>Youtube Channel</li>
            
         </ol>
     </div>
     <div id="last_contain">@CopyRight BOX OFFICE  2000-2017 -----<span style="color:red">All Rights Reserved:</span></div>
   <script>
     if(navigator.userAgent.indexOf("Chrome")!=-1)
    {
   
     document.getElementById("conform_account_notice").style.fontSize="10px";  
    }
   </script>
 </div>
 <?php 
    ob_end_flush();
	exit();
 
 ?>
</body>
</html>