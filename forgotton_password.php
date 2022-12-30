<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

set_error_handler("boxoffice_error_report");

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
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
         <link href="forgot_password_middle_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="home_bottom_bar.css" rel="stylesheet" media="all" type="text/css"/> 
        
      <script src="notification_text_animation.js"></script>
      
      <script src="threter_animation.js"></script>
	  
	  <script src="forgot_password_middle_bar.js"></script>
	  
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
	 
	 
     <a href="login.php"><button class="login_button" type="button">login</button></a>
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
          
	     <div id="user_details">
		 <?php if(isset($_SESSION["un"])) { echo "<script>document.getElementById('user_details').style.display='block';</script>"; } ?>
		 <img height="150px" class="img-rounded" width="150px" src="<?php $path="profile_pics/".$_SESSION["un"].".jpg"; if(file_exists($path)){ echo $path;} else{$path="profile_pics/black_profile_pic.jpg"; echo $path;} ?>" style="float:left"/>
		 
		 <span style="clear:both; position:relative; left:20px; font-size:20px; text-transform:capitalize; font-weight:700; color:blue;" > <?php echo $_SESSION["fn"];?> <?php echo $_SESSION["ln"];?></span><br><br><br>
		 
		 <button type="button" id="con_user_button" onclick="show_recovery_options()">ok it's me show me password recovery option</button> 
		 
		 </div><br><br><br><br>
	      <div id="user_not_found">we couln't find such user try again</div>
	     <form accept-charset="UTF-8" action="search_user.php" method="post" name="search_user" id="search_user">
		  
		  <center><legend>Search your details below : </legend></center>
		 <input size="50" type="text" id="serch_user_input_box" name="serch_user_input_box" placeholder=" Enter Your Username or Email or Mobile Number"/>
		 
		 <button type="submit" id="search_user_buttom">search</button>
		 </form><br><br><br>
	  
       <div class="conform_account_box" id="conform_account_box">
           <div id="conformation_header">Reset your password using one of the below methods</div> 
		   <div id="server_side_code_warning" >DUE TO SOME TECHNICAL ERROR THIS PROCCESS WAS NOT SUCCESSFULL TRY AGAIN</div> 
		   <div id="server_side_wrong_code_warning" >CODE IS NOT MATCHING PLEASE TRY AGAIN</div> 
		   <div id="code_warning" >SHORTOUT ALL WARNING ABOUT VERIFICATION CODE BELOW IN RED COLOR</div> 
		   <div id="code_warning1" >PLESEA DON'T SUBMIT BLANK CODE SUBMIT WITH PROPER CODE</div> 
		    <div id="code_warning2" >CODE LENGTH IS GRETER THAN 10 DIGITS, SUBMIT UNDER 10 DIGITS</div>
	     <table>
		   <tbody>
		   
		       <tr>
			   
			     <td >
				 <span class="email_con" id="em_code"><?php echo $_SESSION["em"]; ?></span>
				 </td>
				 <td>
				 <button type="button" id="get_email_code" onclick="display_mail_form()" class="email_button">send me mail</button>
				 
				 <span id="email_code_warning" style="display:none; color:red; font-size:10px; font-weight:500;" >Code must be of Digits not any thing else</span>
				 
				 <form accept-charset="UTF-8" action="email_conform_account_forgot_password.php" name="email_verfication" id="email_verfication" method="post" onsubmit="return email_con_validation()" novalidate>
				    <input placeholder="Enter the code" type="text" name="email_code" id="e_code" size="25" onkeyup="email_ajax_vali(this.value)"/><input type="text" value="<?php echo $_SESSION['un'];?>" name="username" style="visibility:hidden;"><br><br>
					 <button type="submit" style="color:white; border:solid thin black; border-radius:3px; font-weight:600; background-color:black; padding:4px 4px 0px 4px;">Submit</button>
				 </form>
				 
				 </td>
				 
			   </tr>
			   
			   <tr>
			    <td><span class="mobile_con" id="mob_code"><?php  echo $_SESSION["mob"]; ?></span></td>
				
				<td>
				<button id="get_mobile_code" type="button" onclick="display_mobile_form()" class="mobile_button">send me message</button>
				
				<span id="mobile_code_warning" style="display:none; color:red; font-size:10px; font-weight:500;" >Code must be of Digits not any thing else</span>
				
				<form accept-charset="UTF-8" action="mobile_conform_account_forgot_password.php" name="mobile_verfication" id="mobile_verfication" method="post" onsubmit="return mobile_con_validation()" novalidate>
				     <input placeholder="Enter the code" type="text" id="m_code" name="mobile_code" size="25" onkeyup="mobile_ajax_vali(this.value)"/> <input type="text" value="<?php echo $_SESSION['un'];?>" name="username" style="visibility:hidden;"><br><br>
					 <button type="submit" style="color:white; border:solid thin black; border-radius:3px; font-weight:600; background-color:black; padding:4px 4px 0px 4px;">Submit</button>
				 </form>
				
				</td> 
				
			   </tr>
			   
		   </tbody>
		 </table>
	                   
        </div><br><br><br>
		<div id="notication_about_account_header">some important things about boxoffice account are below : </div>
      <ol class="notication_about_account">
	    <li>Don't share your username to anyone becoz it is very high secure </li>
		<li>your account security depens on your username</li>
		<li>to participiat in any event of boxoffice ,your account must be conform</li>
		<li>all payments,all notication,ect will only done if account is conform </li>
	  </ol>
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
     <div id="last_contain">All Rights Reserved:</span></div>
   
 </div>
 <?php
       if(isset($_SESSION["ac_conform_error"]))
	   {
      if($_SESSION["ac_conform_error"]=="yes")
	 {
	   echo "<script>server_side_ac_conform_error();</script>";
	  
	   session_destroy();
	 }
	 }
	 if(isset($_SESSION["wrong_code_ac_conform_error"]))
	 {
	 if($_SESSION["wrong_code_ac_conform_error"]=="yes")
	  {
	 
	    
	    echo "<script>server_side_wrong_code_ac_conform_error();</script>";
	    session_destroy();
	    
	  }
	 } 
	if(isset($_SESSION["search_user_field"])) 
	{
	   if($_SESSION["search_user_field"]=="yes") 
	   {
	     echo "<script>user_error();</script>";
	     session_destroy();
	   }
	
	}
	if(isset($_SESSION["mob"]))
    {
	  unset($_SESSION["mob"]);
	}
   if(isset($_SESSION["em"]))
   {
     unset($_SESSION["em"]);
   } 
unset($_SESSION["un"]);   
 ?>
</body>
</html>