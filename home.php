<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
$post2_liking="no";
$post3_liking="no";
$ac_sta="no";
set_error_handler("boxoffice_error_report");
date_default_timezone_set('Asia/Kolkata');
function boxoffice_error_report($no,$mess,$file,$line,$content)
{
    echo "<b>ERROR : [$no] $content, $mess in <mark>$file</mark> on line <b>$line</b>";
    error_log(" [NEW] Error: [$no] $content, $mess in $file on $line \n",3,"serverside_error_report.log");
    
}

?>

<!DOCTYPE html>

<html lang="US-en">   
  <head>
     <title>welcome to boxoffice</title>
	 
     <meta name="viewport" content="width=device-width,initail-scale=1"> 
     
	 <script src="jquery-3.0.0.js"></script> 
     <script src="jquery.js"></script> 
      <link rel="stylesheet" href="bootstrap.min.css" media="all" type="text/css"/>
         
      <script src="bootstrap.min.js"></script>
         
         
         
     <link href="mainstylesheet.css" rel="stylesheet" media="all" type="text/css"/>  
         
         <link href="home_top_bar.css" id="top_bar_style" rel="stylesheet" media="all" type="text/css"/> 
		 
		 <!--[if IE]>
         <link rel="stylesheet" type="text/css" href="ie_top_bar.css"/>
         <![endif]-->
		 
		  <link href="home_middle_bar.css" rel="stylesheet" media="all" type="text/css"/> 
         
         <link href="home_bottom_bar.css" rel="stylesheet" media="all" type="text/css"/> 
        
      <script src="notification_text_animation.js"></script>
      
      <script src="threter_animation.js"></script>
	  
	  <script src="add_animation.js"></script>
	  
      <script src="home.js"></script>
		 
      <script src="navigation_changing.js"></script>
		 
	 <script src="anymouse_changing.js"></script>
		 
     <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
         
     <meta name="discription" content="boxoffice is a film production company which make bollywood movies"/>
         
     <meta name="keyword" content="boxoffice,bollywood movies,movie,film,film production"/>
         
     <meta name="robots" content="index"/>
         
     <meta name="robots" content="follow"/>
         
     <meta name="developer" content="RAJ"/>
	 
	       
         
</head>
      
<body onload="notification_text_animation(),ajax_system_for_comment(),ajax_system_for_fetching_data(),set_post_data(),anymouse_user()">

<div class="top">
     <marquee>Welcome to Box office Film Production house, This is the officail website of Box office here you can book all type of events and shows and Movies which are made by Box office</marquee> 
     <img style="padding:20px; float:left;" id="boxoffice_top_logo" src="Box-Office-Logo-ONLINE.png" height="150px" width="250px" alt="boxoffice"/>
     
          <!-- <i class="sitelogo">BOX OFFICE</i>-->
     <div class="top_middle">
     <div id="socail_links">
        
         <a href="facebook.com" target="_blank"><img class="img-circle" src="facebook.jpg" height="20px" width="30px" alt="box office facebook page"/> </a>
         
         <a href="twitter.com" target="_blank"> <img class="img-circle" src="twitter.jpg" height="20px" width="30px" alt="box office facebook page"/> </a> 
         
         <a href="google.com" target="_blank"> <img class="img-circle" src="google.jpg" height="20px" width="30px" alt="box office facebook page"/>  </a>
         
         <a href="whatsapp.com" target="_blank"> <img class="img-circle" src="whatsapp.png" height="20px" width="30px" alt="box office facebook page"/>  </a>
         
        <img class="line" src="line.png" width="300px" alt="white line"/> 
         
         <form enctype="text/plain" name="search_box" accept-charset="UTF-8" autocomplete="on" method="get" action="search_inbox_result.php">
             <input id="search" type="text" placeholder="search your thing" name="search_keyword">
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
      <div id="login_error_a" style="text-transform:uppercase;">You are not login to access all feature of boxoffice you must login first <a href="login.php" style="text-transform:lowercase;"> click here to login</a></div>
      <div id="ac_error">YOUR ACCOUNT IS NOT CONFORM PLESE CONFORM IT FIRST TO ACCESS ALL THE FEATURES OF BOX OFFICE <a href="account_conformation.php">click here to conform your account</a></div>	  
      <a href="advertise.com"><img style="position:relative; top:20px; left:50px;" src="add_ani1.jpg" height="60px" width="800px" alt="advertisement" id="add" /></a>
      <?php
$login="no";
$post1_liking="no";
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
	  
	 }
$row=mysqli_fetch_assoc($r);
 
	 
    if($_COOKIE["boxoffice_login"]!==$row["login"])
     {
	   
       echo "<script>login_error();</script>";
	   $login="no";
     }
	 else
	 {
	    $login="yes";
	    echo "<script>change_navigation_options();</script>";
	    $sql="select ac_status from user_profile_data where uname='$myarr[0]'";
		$r=mysqli_query($conn,$sql);
		 if(mysqli_num_rows($r)<1)
	      {
	         //trigger_error("sql doesn't fetch any row from boxoffice data for login verification",E_USER_ERROR);
		
	  
	        }
		 $row=mysqli_fetch_assoc($r);
            if($row["ac_status"]=="activate")
                {
				  $ac_sta="yes";
				  
				}
			else
            {
			   echo "<script>ac_error();</script>";
			
			}		 
	
	 }
	 
} 
else
{
       
       echo "<script>login_error();</script>";
	   

 }
?>
      <div class="first_content">
          
        <img style="float:right;" class="img-circle" src="om.png" height="150px" width="200px" alt="somthing"/>
          
		A film – also called a movie, motion picture, moving picture, picture, photoplay or (slang) flick – is a work of visual art that simulates experiences and otherwise communicates ideas, stories, perceptions, feelings, beauty, or atmosphere through the use of moving images. These images are generally accompanied by sound and, more rarely, other sensory stimulations.[1] The word "cinema", short for cinematography, is often used to refer to filmmaking and the film industry, and to the art form that is the result of it.
		 <div id="post1_header">
		 
		 <img height="40px" width="60px" alt="like button" id="like_button" src="<?php  
		    if(isset($_COOKIE["boxoffice_login"]))
			{
            $sql="select uname from post_liking where post_name='post3'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $post3_liking="yes";
							 break;
						  
						  }
					  }
			}
			if($post3_liking=="yes") { echo "like.jpg";} else { echo "not_like.jpg";}				

	 ?>" onclick="
		 <?php
		  
		    if($login!=="yes"||$ac_sta!=="yes")
			  {
			     echo "user_not_login_or_unactivate()";
			  
			  }
		    else
			 {
			    echo "perform_like_operation_post1_specail()";
			 }
		 ?>"/>
		 
		 <span id="likes">
		 </span>
		 <img src="comment_logo.png" id="show_comments" onclick="comment_arengment_fun('1')"  height="40px" width="60px" alt="comment logo">
		 <span id="comments"></span>
		 <img src="share_logo.png" id="show_share_option" height="40px" width="60px" alt="share logo" onclick="share_arengment_fun('0')">
		  
		  <div id="share_options0">
		  
		  <img id="facebook_sh_option" src="facebook.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation('facebook')";} ?> "/>
		  <img id="twitter_sh_option" src="twitter.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation('twitter')";} ?> "/>
		  <img id="google_sh_option"  src="google.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation('google')";} ?> "/>
		  <img id="whatsapp_sh_option" src="whatsapp.png" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation('whatsapp')";} ?> "/>
		  
		  </div>
		 
		 <span id="shares"></span>
		 
		 </div>
		 <div class="server_data_post1" id="post1_comments1">
		 
		    

			 <div id='get_new_comment'></div>
		
			     
			    <div style='padding:5px;'><form accept-charset='UTF-8' action='comment_entry.php' method='get' name='comment_form' id='comment_from' novalidate>
		     
			<textarea  placeholder='write your comment' id='comment_box' name='user_comment'></textarea>
		     <button type='button' onclick='perform_comment_operation()' id='comment_submit_button'>post</button>
		 </form></div>
			 
		  
		
		 
		 </div>
      </div>
    
      <div class="second_content">
          <video style="float:left;" controls buffered src="show.mp4" height="300px" width="350px" poster="poster.jpg"></video>
          <div class="second_content_text">we are here for you. watch our dehli, new dehli odditon video online. 50,00000 people took participate in this oddition. oddition date:15/01/2017</div> 
      		
	   		 <div id="post2_header">
		 
		 <img height="40px" width="60px" alt="like button2" id="like_buttonpost2" src="<?php  
		 $host="mysql";
          $user="user";
          $pass="saxud3sldnb";
          $db="boxoffice";

         $conn=mysqli_connect($host,$user,$pass,$db);
         if(!$conn)
         {
          trigger_error(mysqli_connect_error(),E_USER_ERROR);
         }
		    if(isset($_COOKIE["boxoffice_login"]))
			{
             $sql="select uname from post_liking where post_name='post2'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $post2_liking="yes";
							 break;
						  
						  }
					  }
			}		  
				if($post2_liking=="yes") { echo "like.jpg";} else { echo "not_like.jpg";}				
               
	 ?>" onclick="
		 <?php
		  
		    if($login!=="yes"||$ac_sta!=="yes")
			  {
			     echo "user_not_login_or_unactivate()";
			  
			  }
		    else
			 {
			    echo "perform_like_operation_common('post2')";
			 }?> "/>
		 
		 <span id="likespost2">
		 <?php 
		   $sql="select likes from post_details where post_name='post2'";
		   $r=mysqli_query($conn,$sql);
		   $row=mysqli_fetch_assoc($r);
		   echo $row["likes"];
		 
		 ?>
		 
		 </span>
		 <img src="comment_logo.png" id="show_comments1" onclick="comment_arengment_fun('2')"  height="40px" width="60px" alt="comment logo">
		 <span id="commentspost2">
		 
		 <?php 
		   $sql="select comments from post_details where post_name='post2'";
		   $r=mysqli_query($conn,$sql);
		   $row=mysqli_fetch_assoc($r);
		   echo $row["comments"];
		 
		 ?>
		 </span>
		 <img src="share_logo.png" id="show_share_option1" height="40px" width="60px" onclick="share_arengment_fun('1')" alt="share logo">
		  
		  <div id="share_options1">
		  
		  <img id="facebook_sh_option1" src="facebook.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('facebook','post2')";} ?> "/>
		  <img id="twitter_sh_option1" src="twitter.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('twitter','post2')";} ?> "/>
		  <img id="google_sh_option1"  src="google.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('google','post2')";} ?> "/>
		  <img id="whatsapp_sh_option1" src="whatsapp.png" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('whatsapp','post2')";} ?> "/>
		  
		  </div>
		 
		 <span id="sharespost2">
		  <?php 
		   $sql="select shares from post_details where post_name='post2'";
		   $r=mysqli_query($conn,$sql);
		   $row=mysqli_fetch_assoc($r);
		   echo $row["shares"];
		 
		 ?>
		 
		 </span>
		 
		 </div>
		 <div class="server_data_post2" id="post2_comments">
		 
		    

			 <div id='get_new_commentpost2'>
			 
			 <?php
			 $sql="select fname,lname,date,comment from post_data where post_name='post2'";
             $r=mysqli_query($conn,$sql);
             while($row = mysqli_fetch_assoc($r))
		     {
			 $d=strtotime($row['date']);
			 $c=date('d-m-Y h:i:s a',$d);
			    echo "<div style='   border-bottom:solid thin black; padding:10px; border-radius:5px;'><b  style='text-decoration:underline;'>".$row["fname"]." ".$row["lname"]." :</b> <b>[".$c."]</b><br>:-<span style='color:#1E90FF;'>".$row["comment"]."</span></div>";
			 
			 }
			 ?>
			 </div>
		
			     
			    <div style='padding:5px;'><form accept-charset='UTF-8' action='comment_entry.php' method='get' name='comment_formpost2' id='comment_frompost2' novalidate>
		     
			<textarea  placeholder='write your comment' id='comment_boxpost2' name='user_commentpost2'></textarea>
		     <button type='button' value='post2' onclick='perform_comment_operation_common(this.value)' id='comment_submit_button'>post</button>
		 </form></div>
			 
		  
		
		 
		 </div>
			
			
			
	</div>
     
      <div class="thrid_content">
         <img style="float:right; margin-left:5px;" class="img-rounded" src="thrid_content_image.jpg" height="200px" width="300px" alt="somthing"/> 
          we are here because we are desinging the website develoiper is king is the world of king sand he love people
          we are here because we are desinging the website develoiper is king is the world of king sand he love people
         we are here because we are desinging the website develoiper is king is the world of king sand he love people
         we are here because we are desinging the website develoiper is king is the world of king sand he love people
         we are here because we are desinging the website develoiper is king is the world of king sand he love people
         we are here because we are desinging the website develoiper is king is the world of king sand he love people
        we are here because we are desinging the website develoiper is king is the world of king sand he love people
        we are here because we are desinging the website develoiper is king is the world of king sand he love people
       we are here because we are desinging the website develoiper is king is the world of king sand he love people
        <div id="post3_header">
		 
		 <img height="40px" width="60px" alt="like button2" id="like_buttonpost3" src="<?php  
		    if(isset($_COOKIE["boxoffice_login"]))
			{
            $sql="select uname from post_liking where post_name='post3'";
				  $r=mysqli_query($conn,$sql);

				   while($row=mysqli_fetch_assoc($r))
				      {
					     if($row["uname"]==$myarr[0])
						  {
						     $post3_liking="yes";
							 break;
						  
						  }
					  }
			}
			if($post3_liking=="yes") { echo "like.jpg";} else { echo "not_like.jpg";}				

	 ?>"  onclick="
		 <?php
		  
		    if($login!=="yes"||$ac_sta!=="yes")
			  {
			     echo "user_not_login_or_unactivate()";
			  
			  }
		    else
			 {
			    echo "perform_like_operation_common('post3')";
			 }?>  "/>
		 
		 <span id="likespost3">
		 <?php 
		   $sql="select likes from post_details where post_name='post3'";
		   $r=mysqli_query($conn,$sql);
		   $row=mysqli_fetch_assoc($r);
		   echo $row["likes"];
		 
		 ?>
		 
		 </span>
		 <img src="comment_logo.png" id="show_comments2" onclick="comment_arengment_fun('3')"  height="40px" width="60px" alt="comment logo">
		 <span id="commentspost3">
		 
		 <?php 
		   $sql="select comments from post_details where post_name='post3'";
		   $r=mysqli_query($conn,$sql);
		   $row=mysqli_fetch_assoc($r);
		   echo $row["comments"];
		 
		 ?>
		 </span>
		 <img src="share_logo.png" id="show_share_option1" height="40px" width="60px" onclick="share_arengment_fun('2')" alt="share logo">
		  
		  <div id="share_options2">
		  
		  <img id="facebook_sh_option2" src="facebook.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('facebook','post3')";} ?> "/>
		  <img id="twitter_sh_option2" src="twitter.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('twitter','post3')";} ?> "/>
		  <img id="google_sh_option2"  src="google.jpg" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('google','post3')";} ?> "/>
		  <img id="whatsapp_sh_option3" src="whatsapp.png" height="20px" width="30px" onclick="<?php if($login!=="yes"||$ac_sta!=="yes") {echo "user_not_login_or_unactivate()"; } else { echo "perform_sharing_operation_common('whatsapp','post3')";} ?> "/>
		  
		  </div>
		 
		 <span id="sharespost3">
		  <?php 
		   $sql="select shares from post_details where post_name='post3'";
		   $r=mysqli_query($conn,$sql);
		   $row=mysqli_fetch_assoc($r);
		   echo $row["shares"];
		 
		 ?>
		 
		 </span>
		 
		 </div>
		 <div class="server_data_post3" id="post2_comments">
		 
		    

			 <div id='get_new_commentpost3'>
			 
			 <?php
			 $sql="select fname,lname,date,comment from post_data where post_name='post3'";
             $r=mysqli_query($conn,$sql);
             while($row = mysqli_fetch_assoc($r))
		     {
			 $d=strtotime($row['date']);
			 $c=date('d-m-Y h:i:s a',$d);
			    echo "<div style='color:black; border-bottom:solid thin black; padding:10px; border-radius:5px;'><b  style='text-decoration:underline;'>".$row["fname"]." ".$row["lname"]." :</b> <b>[".$c."]</b><br>:-<span style='color:#1E90FF;'>".$row["comment"]."</span></div>";
			 
			 }
			 ?>
			 </div>
		
			     
			    <div style='padding:5px;'><form accept-charset='UTF-8' action='comment_entry.php' method='get' name='comment_formpost3' id='comment_frompost2' novalidate>
		     
			<textarea  placeholder='write your comment' id='comment_boxpost3' name='user_commentpost3'></textarea>
		     <button type='button' value='post3' onclick='perform_comment_operation_common(this.value)' id='comment_submit_button'>post</button>
		 </form></div>
			 
		  
		
		 
		 </div>
			
			
			

        
        
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
     <div id="last_contain" >@CopyRight BOX OFFICE  2000-2017 -----<span style="color:red">All Rights Reserved:</span></div>
   
 </div>
   <?php
        if(isset($_SESSION["comment_error"]))
		{
         if($_SESSION["comment_error"]=="yes")
		 {
		    echo "<script>comment_error_message(); </script>";
		    unset($_SESSION["comment_error"]);
		 
		 }
		} 
        if(isset($_SESSION["login_error"]))
		  {
		    if($_SESSION["login_error"]=="yes")
			  {
			    echo "<script>login_error(); </script>";
			    unset($_SESSION["login_error"]);
			  }
		  
		  }
		if(isset($_SESSION["ac_error"]))
		  {
		    if($_SESSION["ac_error"]=="yes")
			  {
			    echo "<script>ac_error(); </script>";
			    unset($_SESSION["ac_error"]);
			  }
		  
		  } 
   ?>
<div id="get_post_details" style="color:white; display:inline; visibility:hidden;"></div>
<div id="get_post_detailspost2" style="color:white; display:inline; visibility:hidden;"></div>
<div id="get_post_detailspost3" style="color:white; display:inline; visibility:hidden;"></div>
</body>
</html>

