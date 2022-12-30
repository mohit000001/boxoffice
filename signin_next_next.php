<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

set_error_handler("boxoffice_error_report");

function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
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
	   
	   setcookie("boxoffice_login","",time()-84000,"/");
		  
	   $sql="update login_system set signin='NULL' where uname='$myarr[0]'";
	   mysqli_query($conn,$sql);
	   mysqli_close($conn);
     }
	 ELSE
	 {
	  mysqli_close($conn); 
	  }
} 
?>
<!DOCTYPE html>

<html lang="US-en">   
  <head>
     <title>welcome to boxoffice</title>
     
     <meta name="viewport" content="width=device-width,initail-scale=1"> 
     <script src="jquery-3.0.0.js"></script> 
         
      <link rel="stylesheet" href="bootstrap.min.css" media="all" type="text/css"/>
         
      <script src="bootstrap.min.js"></script>
     
         
         
     <link href="mainstylesheet.css" rel="stylesheet" media="all" type="text/css"/>  
         
         <link href="home_top_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="signin_next_next_middle_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="home_bottom_bar.css" rel="stylesheet" media="all" type="text/css"/> 
        
      <script src="notification_text_animation.js"></script>
      
      <script src="threter_animation.js"></script>
	  
	  <script src="signin_next_next_validation.js"></script> 

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
      
      
      
      <form accept-charset="UTF-8"  action="optional_info.php" method="post" name="new_account_option_details" class="new_account_option_details" onsubmit="return optional_full_validation()" novalidate>
         <div id="server_side_optional_details_warning">DUE TO SOME TECHNICAL ERROR YOUR DETAILS HAS NOT BEEN SEND TO SERVER TRY AGAIN OR TRY AFTER SOME TIME</div>
		 <div id="optional_details_warning">SHORTOUT ALL WARNINGS IN RED COLOR AND CHECK OUT LENGHT OF INPUT FLIED WHICH HAVE YOU FILLED </div>
		 
          <center><legend>set your optional details, these are optional you can skip</legend></center>
          
          nick name : <input type="text" name="nick_name" size="40" onblur="nname_validation(this.value)"><br>
		               <span id="nname_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
		  <br><br><br>
       
          high shcool  : <input type="text" name="high_shcool" size="40" onblur="hs_validation(this.value)"><br>
		                <span id="hc_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
		  <br><br><br>
          
          junior college  : <input type="text" name="j_college" size="40" onblur="jc_validation(this.value)"><br>
		                   <span id="jc_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
		  <br><br><br> 
          
          12+ education : <input type="text" name="bach_education" size="40" onblur="eq_validation(this.value)"><br>
		                      <span id="eq_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
		  <br><br><br>
       
          languages  : <input type="text" name="lang" size="40" onblur="lang_validation(this.value)"><br>
		                      <span id="lang_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
							  
							  <br><br><br>
          
          current work  : <input type="text" name="currtent_work" size="40" onblur="cw_validation(this.value)"><br>
		                      <span id="cw_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
		  <br><br><br> 
          
          religion  : <select id="reli" name="religion" onchange="religion_validation(this.value)">
		                  <option value="">select your religion</option>
						  <option value="hindu">Hindu</option>
						  <option value="chrisan">Chrisan</option>
						  <option value="islam">Islam</option>
						  <option value="budhh">Budhh</option>
						  <option value="gain">Gain</option>
		  
		            </select>
		            <span id="religion_warning" style="position:relative; left:10px; color:red; font-size:11px;"></span>   
					
		  <br><br><br>
          
          relationship : Married <input type="radio" name="relationship" value="married"> unmarried <input type="radio" value="unmarried" name="relationship"><br><br><span id="relation_warning" style="position:relative; left:10px; color:red; font-size:11px; display:none;">* if you want to set your optional details you must select your relationship status</span><br><br> <br>
          
           write about yourself :<br>
           
          <textarea id="about_box" placeholder="write about your self but it must be less then 500 charters" cols="20" rows="10" wrap="hard" maxlength="700" name="self_info" onblur="ab_validation(this.value)"></textarea><br>
		  <span id="ab_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
		  <br><br><br> 
		  
          <button type="submit" class="new_account_option_details_submit_button">DONE</button>
          
          <a href="signin_next_next_skip.php"><button type="button" class="skip_button">SKIP</button></a>
          
      </form>
      
      
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
   
 </div>
  <?php 
	      if(isset($_SESSION["server_side_optional_details_error"]))
		  {
		     if($_SESSION["server_side_optional_details_error"]=="yes")
              { 
                   echo "<script>optional_details_warning(); </script>";
	               session_destroy();
              }
           }			  
    ?>
</body>
</html>