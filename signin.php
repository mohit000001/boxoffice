<?php 

session_start();
  
?>

<!DOCTYPE html>
<html lang="US-en" encoding="UTF-8">   
  <head>
     <title>welcome to boxoffice</title>
     
     <meta name="viewport" content="width=device-width,initail-scale=1"/> 
     <script src="jquery-3.0.0.js"></script> 
         
      <link rel="stylesheet" href="bootstrap.min.css" media="all" type="text/css"/>
         
      <script src="bootstrap.min.js"></script>
         
         
         
     <link href="mainstylesheet.css" rel="stylesheet" media="all" type="text/css"/>  
         
         <link href="home_top_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="signin_middle_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="home_bottom_bar.css" rel="stylesheet" media="all" type="text/css"/> 
        
      <script src="notification_text_animation.js"></script>
      
      <script src="threter_animation.js"></script>
      
      <script src="signin_validation.js"></script>
      <script src="signin_date_of_birth.js"></script>
	  
	  <script src="navigation_changing.js"></script>
		 
	  <script src="anymouse_changing.js"></script>
          
     <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
         
     <meta name="discription" content="boxoffice is a film production company which make bollywood movies"/>
         
     <meta name="keyword" content="boxoffice,bollywood movies,movie,film,film production"/>
         
     <meta name="robots" content="index"/>
         
     <meta name="robots" content="follow"/>
         
     <meta name="developer" content="RAJ"/>
         
</head>
      
<body onload="notification_text_animation(),day_select(),anymouse_user(),empty_officle_form_data()">
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
    <!--problem problem shortout in 6 hours enctype="text/plain" use only when we are submiting special type data from like image,video,or plan text in nbelow form there email type is present in from also checkbox radio is present so this is not applicable for this -->
      <form novalidate accept-charset="UTF-8" action="new_account_required_info.php" method="post" name="signin_form" class="new_account_form" onsubmit="return full_checking_validation()">
         
		  <div id="server_side_warning">Due to Some technical error your account not created Try again or try after sometime</div>  
          <div id="validation_warning">Don't leave any field blanck and  shortout all below warnings in red color to sumbit your details</div>
          
          <!--<img src="validation_warning.jpg" height="50px" width="50" alt="validation_warning" style="border:0px solid aliceblue;"/>-->
          
          <center> <legend>Fill all Details properly and all fileds are nessary</legend></center>
		 <!-- <button type="button" onclick="auto_fill()">go</button>auto filling form button-->
                   
       First Name : <input type="text" name="firstname" size="40" onblur="fname_validation(this.value)" id="fname"><br>
          <span id="fname_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
          <br><br>
       
       Last Name  : <input type="text" name="lname" size="40" onblur="lname_validation(this.value)" id="lname"/><br>
          <span id="lname_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px;"></span>
          <br><br>
         
       User name  : <input id="uname" type="text" name="user_name" size="40" onblur="uname_validation(this.value)" onkeyup="user_name_selection(this.value)"/><span id="uname_exists"><img src="wrong.jpg" height="15px" width="20px"/>this username is already taken</span><span id="uname_not_exists"><img src="right.jpg" height="15px" width="20px"/>this username is available</span><br>
          <span id="uname_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px; "></span>
          <br><br>   
          
       E-mail     : <input id="email" style="position: relative; left:30px;" type="email" name="email" size="40" onblur="email_validation(this.value)" onkeyup="email_selection(this.value)"/><span id="email_exists" style="margin-left:40px;"><img src="wrong.jpg" height="15px" width="20px"/>this email address is already registered</span><span style="margin-left:40px;" id="email_not_exists"><img src="right.jpg" height="15px" width="20px"/>this email address is available</span><br>
          <span id="email_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px; "></span>
          <br><br>
          
       Password   : <input id="pass1" type="password" name="pass1" size="40" onblur="password_validation(this.value)" onkeyup="password_strenth(this.value)"/>
          <br>
          <span id="password_strenth_image" style="border:black solid thin; position:relative; left:80px; border-radius:5px; top:10px; padding:3px; font-size:10px; display:none;"></span><br>
          
          <span id="password_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px; "></span>
          <br><br>
          
       Re-Password   : <input id="pass2" type="password" name="pass2" size="40" onblur="re_password_validation(this.value)"><br>
          
          <span id="re-password_warning" style="position:relative; left:80px; top:10px; color:red; font-size:10px; "></span>
          <br><br> 
          
          <label> Male <input  type="radio" name="sex" value="male" ></label> <label style="position: relative; left:20px;">Fe-male <input type="radio" name="sex" value="female" >
          <span id="gender_warning" style="color:red; font-size:12px;"></span>
          </label> <br><br><br>     
       
       date-of-birth : <select name="date" style="min-width:80px;" id="day" >
          <option value="none" selected >Day</option>

          
                        </select>
          
          <select name="month" style="min-width:80px;" id="month" >
          <option value="" selected >Month</option>
            <option value="01">Jan</option>
            <option value="02">Feb</option>
            <option value="03">Mar</option>
            <option value="04">Apr</option>
            <option value="05">May</option>  
            <option value="06">Jun</option>
            <option value="07">July</option>
            <option value="08">Aug</option>
            <option value="09">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>

  

          
                        </select>
          
          <select name="year" style="min-width:100px;" id="year" >
          <option value="none" selected >Day</option>

          
                        </select>
          
          <span id="bod_warning" style="color:red; font-size:10px;"></span>
          <br><br><br>
          
           Address line 1 : <input type="text" name="add1" size="50" > <span id="add1_warning" style="color:red; font-size:13px;"></span>
          <br><br>
          
          Address line 2 : <input type="text" name="add2" size="50"><br><br>
          
          Pincode : <input id="pin" type="text" name="pincode" size="30" onblur="pincode_validation(this.value)"><br>
                    <span id="pincode_warning" style="position:relative; left:60px; top:10px; color:red; font-size:10px; "></span>
          <br><br>
          
             <select name="country" onchange="select_state(this.value)" style="min-width:100px;">
              
              <option selected value="">select country</option>
              <option value="india">india</option>
              <option value="usa">usa</option>
              <option value="canda">canda</option>
              <option value="russia">russia</option>
              
          </select>
          
          <select name="state"  style="position: relative; left:20px; min-width:100px;" id="state" onchange="select_city(this.value)">
              
              <option value="select state" selected id="select_state">select state</option>
              <!--<option vlaue="maharastra">maharatra</option>
              <option vlaue="rajasthan">rajasthan</option>
              <option vlaue="madhe_pardesh">madhe pardesh</option>
              <option vlaue="gujrat">Gujrat</option>-->
              
          </select>
          
          <select name="city" style="min-width:100px; position: relative; left:40px;" id="city">
              
              <option value="select city">select city</option>
             <!--<option vlaue="nagpur">nagpur</option>
              <option vlaue="mumbai">mumbai</option>
              <option vlaue="pune">pune</option>
              <option vlaue="jaipur">jaipur</option>-->
              
          </select> <span id="cou_warning" style="position:relative; left:50px; color:red; font-size:13px; "></span> <br><br>
         
          Mobile.NO : <span style="color:gray; border:solid 2px white;" id="countery_mobile_code"></span> <input type="text" id="mobile" name="mobile" size="40" onblur="mobile_validation(this.value)" onkeyup="mobile_number_selection(this.value)"/><span id="mobile_exists"><img src="wrong.jpg" height="15px" width="20px"/>this mobile number is already registred</span><span id="mobile_not_exists"><img src="right.jpg" height="15px" width="20px"/>this mobile number is available</span><br>
          
          <span id="mobile_warning" style="position:relative; left:60px; top:10px; color:red; font-size:10px; "></span>
          
          <br><br>
          
          <input id="tanc" type="checkbox" name="tc_accept" value="accepted" /> <a href="term_condition.php" target="_blank" style="text-transform:capitalize; word-spacing:3px;">I have fully read all the T&C and i accept them </a>
          
          <span id="tanc_warning" style="position:relative; left:10px; color:red; font-size:13px; "></span>
          
          <br><br>
          
          <button class="form_submit_button" type="submit" >NEXT</button> 
      
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
	      if(isset($_SESSION["tech_error"]))
		  {
		     if($_SESSION["tech_error"]=="yes")
              { 
                 
				   echo "<script>server(); </script>";
	               session_destroy();
				
          	  } 
			
		  }	
	?>
	 <?php
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
	  
	  echo "<script>change_navigation_options();</script>";
     }
	 
} 

?>
</body>
</html>