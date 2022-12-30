<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);

set_error_handler("boxoffice_error_report");
$log_check="no";
function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line ",3,"serverside_error_report.log");
    return false; 
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
		 
		 <link href="sigin_logout_specail.css" rel="stylesheet" media="all" type="text/css"/>
         
         <link href="events.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="home_bottom_bar.css" rel="stylesheet" media="all" type="text/css"/> 
        
      <script src="notification_text_animation.js"></script>
      
      <script src="threter_animation.js"></script>
	  
	  
      <script src="events.js"></script>   
	  
	    <script src="navigation_changing.js"></script>
		 
	  <script src="anymouse_changing.js"></script>	
	  
     <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
         
     <meta name="discription" content="boxoffice is a film production company which make bollywood movies"/>
         
     <meta name="keyword" content="boxoffice,bollywood movies,movie,film,film production"/>
         
     <meta name="robots" content="index"/>
         
     <meta name="robots" content="follow"/>
         
     <meta name="developer" content="RAJ"/>
         
</head>
      
<body onload="notification_text_animation(),event1_animation(),event2_animation(),event3_animation(),event4_animation(),anymouse_user()">
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
      
       <div id="conform_account_notice_on_event">YOUR ACCOUNT IS NOT CONFORM PLESE CONFORM IT FIRST TO APPLY ON ANY EVENTS <a href="account_conformation.php">click here to conform your account</a></div>
       <div id="login_notice_on_event">YOU ARE NOT LOGIN PLESE LOGIN TO BOXOFFICE TO APPLY ON ANY EVENTS <a href="login.php">click here to login into boxoffice</a></div> 	   
      <div class="events">
	    
		  <div class="event1">
		   
		  <img style="float:left;" class="img-rounded" src="events/event1.jpg" height="300px" width="200px" alt="dehli 23-10-2017 event"/>
		   <span style="clear:both; position:relative; left:20px;">
		   <table style="display:inline;">
		     
			 <thead>
			 
			 <tr><th>description</th><th style="position:relative; right:250px;">event details</th></tr>
			 
		     </thead>
			 
			 <tbody>
			 
			 <tr>
			 <td style="max-width:210px; display:inline-block; max-height:300px; overflow:hidden;" >
			 <span style="position:relative; text-transform:capitalize; font-size:12px; font-weight:600; " id="event1_text">
			 Vice President and Editorial Director, ECS: Marcia J. Horton
Editor-in-Chief: Michael Hirsch
Executive Editor: Tracy Dunkelberger
Assistant Editor: Melinda Haggerty
Editorial Assistant: Allison Michael
Vice President, Production: Vince O’Brien
Senior Managing Editor: Scott Disanno
Production Liaison: Jane Bonnell
Production Editor: Maheswari PonSaravanan, TexTech International
Senior Operations Supervisor: Alan Fischer
Marketing Manager: Erin Davis
Marketing Assistant: Mack Patterson
Art Director: Kenny Beck
Cover Designer: Laura C. Ierardi
Cover Image: Color enhanced x-ray of nautilus shell / Bert Myers / Science Photo Library
Art Editor: Greg Dulles
Media Editor: Daniel Sandin
Media Project Manager: Danielle Leone
Composition/Full-Service Project Management: TexTech International
IA-32, Pentium, i486, Intel64, Celeron, and Intel 386 are trademarks of Intel Corporation. Athlon, Phenom, and Opteron
are trademarks of Advanced Micro Devices. TASM and Turbo Debugger are trademarks of Borland International.
Microsoft Assembler (MASM), Windows Vista, Windows 7, Windows NT, Windows Me, Windows 95, Windows 98,
Windows 2000, Windows XP, MS-Windows, PowerPoint, Win32, DEBUG, WinDbg, MS-DOS, Visual Studio, Visual
C++, and CodeView are registered trademarks of Microsoft Corporation. Autocad is a trademark of Autodesk. Java is a
trademark of Sun Microsystems. PartitionMagic is a trademark of Symantec. All other trademarks or product names are
the property of their respective owners </span>
			 </td>
			 
			 <td style="max-width:290px; font-weight:600; padding-right:0px; text-transform:capitalize; display:inline-block; height:300px; position:relative; border-left:solid thin black;">
			   event name : <span style="font-family: Century Schoolbook;">stars of india</span><br><br>
			   
			   city : <span style="font-family: Century Schoolbook;">mumbai</span><br><br>
			   
			   state : <span style="font-family: Century Schoolbook;">maharastra</span><br><br>
			   
			   place : <span style="font-family: Century Schoolbook;">new mumbai, boxoffice studio</span><br><br>
			   
			   date : <span style="font-family: Century Schoolbook; text-decoration:underline; color:red;">25-05-2017</span><br><br>
			   
			   event fee : <span style="font-family: Century Schoolbook;  color:red;">100$/</span><br><br>
			   
			   <a href="apply_event.php?event=mumbai"> <button id="apply_button">apply now</button></a>
			   
			   
			 </td>
			 
			 </tr>
			 
			 <tbody>
			 
		    </table>
			
		  </span>
		  
		  </div>
	  <hr style="border:black thin solid; display:inline-block; width:900px;"><br><br><br><br>
	  
	    <div class="event2">
		   
		  <img style="float:left;" class="img-rounded" src="events/event2.jpg" height="300px" width="200px" alt="dehli 23-10-2017 event"/>
		   <span style="clear:both; position:relative; left:20px;">
		   <table style="display:inline;">
		     
			 <thead>
			 
			 <tr><th>description</th><th style="position:relative; right:250px;">event details</th></tr>
			 
		     </thead>
			 
			 <tbody>
			 
			 <tr>
			 <td style="max-width:210px; display:inline-block; max-height:300px; overflow:hidden;" >
			 <span style="position:relative; text-transform:capitalize; font-size:12px; font-weight:600; " id="event2_text">
			 Vice President and Editorial Director, ECS: Marcia J. Horton
Editor-in-Chief: Michael Hirsch
Executive Editor: Tracy Dunkelberger
Assistant Editor: Melinda Haggerty
Editorial Assistant: Allison Michael
Vice President, Production: Vince O’Brien
Senior Managing Editor: Scott Disanno
Production Liaison: Jane Bonnell
Production Editor: Maheswari PonSaravanan, TexTech International
Senior Operations Supervisor: Alan Fischer
Marketing Manager: Erin Davis
Marketing Assistant: Mack Patterson
Art Director: Kenny Beck
Cover Designer: Laura C. Ierardi
Cover Image: Color enhanced x-ray of nautilus shell / Bert Myers / Science Photo Library
Art Editor: Greg Dulles
Media Editor: Daniel Sandin
Media Project Manager: Danielle Leone
Composition/Full-Service Project Management: TexTech International
IA-32, Pentium, i486, Intel64, Celeron, and Intel 386 are trademarks of Intel Corporation. Athlon, Phenom, and Opteron
are trademarks of Advanced Micro Devices. TASM and Turbo Debugger are trademarks of Borland International.
Microsoft Assembler (MASM), Windows Vista, Windows 7, Windows NT, Windows Me, Windows 95, Windows 98,
Windows 2000, Windows XP, MS-Windows, PowerPoint, Win32, DEBUG, WinDbg, MS-DOS, Visual Studio, Visual
C++, and CodeView are registered trademarks of Microsoft Corporation. Autocad is a trademark of Autodesk. Java is a
trademark of Sun Microsystems. PartitionMagic is a trademark of Symantec. All other trademarks or product names are
the property of their respective owners </span>
			 </td>
			 
			 <td style="max-width:290px; font-weight:600; padding-right:0px; text-transform:capitalize; display:inline-block; height:300px; position:relative; border-left:solid thin black;">
			   event name : <span style="font-family: Century Schoolbook;">dance of india</span><br><br>
			   
			   city : <span style="font-family: Century Schoolbook;">jaipur</span><br><br>
			   
			   state : <span style="font-family: Century Schoolbook;">rajasthan</span><br><br>
			   
			   place : <span style="font-family: Century Schoolbook;">pinck city, boxoffice studio</span><br><br>
			   
			   date : <span style="font-family: Century Schoolbook; text-decoration:underline; color:red;">14-12-2017</span><br><br>
			   
			   event fee : <span style="font-family: Century Schoolbook;  color:red;">1000$/</span><br><br>
			   
			   <a href="apply_event.php?event=jaipur"> <button id="apply_button">apply now</button></a>
			   
			   
			 </td>
			 
			 </tr>
			 
			 <tbody>
			 
		    </table>
			
		  </span>
		  
		  </div>
	  <hr style="border:black thin solid; display:inline-block; width:900px;"><br><br><br><br>
	  
	    <div class="event3">
		   
		  <img style="float:left;" class="img-rounded" src="events/event3.jpg" height="300px" width="200px" alt="dehli 23-10-2017 event"/>
		   <span style="clear:both; position:relative; left:20px;">
		   <table style="display:inline;">
		     
			 <thead>
			 
			 <tr><th>description</th><th style="position:relative; right:250px;">event details</th></tr>
			 
		     </thead>
			 
			 <tbody>
			 
			 <tr>
			 <td style="max-width:210px; display:inline-block; max-height:300px; overflow:hidden;" >
			 <span style="position:relative; text-transform:capitalize; font-size:12px; font-weight:600; " id="event3_text">
			 Vice President and Editorial Director, ECS: Marcia J. Horton
Editor-in-Chief: Michael Hirsch
Executive Editor: Tracy Dunkelberger
Assistant Editor: Melinda Haggerty
Editorial Assistant: Allison Michael
Vice President, Production: Vince O’Brien
Senior Managing Editor: Scott Disanno
Production Liaison: Jane Bonnell
Production Editor: Maheswari PonSaravanan, TexTech International
Senior Operations Supervisor: Alan Fischer
Marketing Manager: Erin Davis
Marketing Assistant: Mack Patterson
Art Director: Kenny Beck
Cover Designer: Laura C. Ierardi
Cover Image: Color enhanced x-ray of nautilus shell / Bert Myers / Science Photo Library
Art Editor: Greg Dulles
Media Editor: Daniel Sandin
Media Project Manager: Danielle Leone
Composition/Full-Service Project Management: TexTech International
IA-32, Pentium, i486, Intel64, Celeron, and Intel 386 are trademarks of Intel Corporation. Athlon, Phenom, and Opteron
are trademarks of Advanced Micro Devices. TASM and Turbo Debugger are trademarks of Borland International.
Microsoft Assembler (MASM), Windows Vista, Windows 7, Windows NT, Windows Me, Windows 95, Windows 98,
Windows 2000, Windows XP, MS-Windows, PowerPoint, Win32, DEBUG, WinDbg, MS-DOS, Visual Studio, Visual
C++, and CodeView are registered trademarks of Microsoft Corporation. Autocad is a trademark of Autodesk. Java is a
trademark of Sun Microsystems. PartitionMagic is a trademark of Symantec. All other trademarks or product names are
the property of their respective owners </span>
			 </td>
			 
			 <td style="max-width:290px; font-weight:600; padding-right:0px; text-transform:capitalize; display:inline-block; height:300px; position:relative; border-left:solid thin black;">
			   event name : <span style="font-family: Century Schoolbook;">indian ideal</span><br><br>
			   
			   city : <span style="font-family: Century Schoolbook;">nagpur</span><br><br>
			   
			   state : <span style="font-family: Century Schoolbook;">maharastra</span><br><br>
			   
			   place : <span style="font-family: Century Schoolbook;">seeta bardi, boxoffice studio</span><br><br>
			   
			   date : <span style="font-family: Century Schoolbook; text-decoration:underline; color:red;">05-10-2017</span><br><br>
			   
			   event fee : <span style="font-family: Century Schoolbook;  color:red;">200$/</span><br><br>
			   
			   <a href="apply_event.php?event=nagpur"> <button id="apply_button">apply now</button></a>
			   
			   
			 </td>
			 
			 </tr>
			 
			 <tbody>
			 
		    </table>
			
		  </span>
		  
		  </div>
	  <hr style="border:black thin solid; display:inline-block; width:900px;"><br><br><br><br>
	  
	    <div class="event4">
		   
		  <img style="float:left;" class="img-rounded" src="events/event4.jpg" height="300px" width="200px" alt="dehli 23-10-2017 event"/>
		   <span style="clear:both; position:relative; left:20px;">
		   <table style="display:inline;">
		     
			 <thead>
			 
			 <tr><th>description</th><th style="position:relative; right:250px;">event details</th></tr>
			 
		     </thead>
			 
			 <tbody>
			 
			 <tr>
			 <td style="max-width:210px; display:inline-block; max-height:300px; overflow:hidden;" >
			 <span style="position:relative; text-transform:capitalize; font-size:12px; font-weight:600; " id="event4_text">
			 Vice President and Editorial Director, ECS: Marcia J. Horton
Editor-in-Chief: Michael Hirsch
Executive Editor: Tracy Dunkelberger
Assistant Editor: Melinda Haggerty
Editorial Assistant: Allison Michael
Vice President, Production: Vince O’Brien
Senior Managing Editor: Scott Disanno
Production Liaison: Jane Bonnell
Production Editor: Maheswari PonSaravanan, TexTech International
Senior Operations Supervisor: Alan Fischer
Marketing Manager: Erin Davis
Marketing Assistant: Mack Patterson
Art Director: Kenny Beck
Cover Designer: Laura C. Ierardi
Cover Image: Color enhanced x-ray of nautilus shell / Bert Myers / Science Photo Library
Art Editor: Greg Dulles
Media Editor: Daniel Sandin
Media Project Manager: Danielle Leone
Composition/Full-Service Project Management: TexTech International
IA-32, Pentium, i486, Intel64, Celeron, and Intel 386 are trademarks of Intel Corporation. Athlon, Phenom, and Opteron
are trademarks of Advanced Micro Devices. TASM and Turbo Debugger are trademarks of Borland International.
Microsoft Assembler (MASM), Windows Vista, Windows 7, Windows NT, Windows Me, Windows 95, Windows 98,
Windows 2000, Windows XP, MS-Windows, PowerPoint, Win32, DEBUG, WinDbg, MS-DOS, Visual Studio, Visual
C++, and CodeView are registered trademarks of Microsoft Corporation. Autocad is a trademark of Autodesk. Java is a
trademark of Sun Microsystems. PartitionMagic is a trademark of Symantec. All other trademarks or product names are
the property of their respective owners </span>
			 </td>
			 
			 <td style="max-width:290px; font-weight:600; padding-right:0px; text-transform:capitalize; display:inline-block; height:300px; position:relative; border-left:solid thin black;">
			   event name : <span style="font-family: Century Schoolbook;">dance india</span><br><br>
			   
			   city : <span style="font-family: Century Schoolbook;">pune</span><br><br>
			   
			   state : <span style="font-family: Century Schoolbook;">maharastra</span><br><br>
			   
			   place : <span style="font-family: Century Schoolbook;">bandra, boxoffice studio</span><br><br>
			   
			   date : <span style="font-family: Century Schoolbook; text-decoration:underline; color:red;">02-08-2017</span><br><br>
			   
			   event fee : <span style="font-family: Century Schoolbook;  color:red;">500$/</span><br><br>
			   
			 <a href="apply_event.php?event=pune"> <button id="apply_button">apply now</button></a>
			   
			   
			 </td>
			 
			 </tr>
			 
			 <tbody>
			 
		    </table>
			
		  </span>
		  
		  </div>
	  <hr style="border:black thin solid; display:inline-block; width:900px;">
	  
	  
	  
	  
	  </div>
      
      
      
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
 
     if(isset($_SESSION["event_login_warning"]))
	   {
	       if($_SESSION["event_login_warning"]=="yes")
		    {
			
			  echo "<script>event_server_side('login');</script>";
			  session_destroy();
			
			}
	   }
 
 if(isset($_SESSION["event_ac_warning"]))
	   {
	       if($_SESSION["event_ac_warning"]=="yes")
		    {
			
			  echo "<script>event_server_side('ac_con');</script>";
			  session_destroy();
			
			}
	   }
 ?>
</body>
</html>