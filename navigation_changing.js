function change_navigation_options()
{

   var l=document.getElementsByTagName("a")[30];
   var ltt=document.createAttribute("id");
   ltt.value="login_button_link";
   l.setAttributeNode(ltt);
   document.getElementById("login_button_link").setAttribute("href","logout.php");
   
   var b=document.getElementsByTagName("button")[1];
   var btt=document.createAttribute("id");
   btt.value="login_button";
   b.setAttributeNode(btt);
   document.getElementById("login_button").innerHTML="logout";
   
   var s=document.getElementsByTagName("button")[2];
   var stt=document.createAttribute("id");
   stt.value="singin_button";
   s.setAttributeNode(stt);
   document.getElementById("singin_button").style.left="100px";
   
   var p=document.getElementsByTagName("a")[9];
   var ptt=document.createAttribute("id");
   ptt.value="profile_button";
   p.setAttributeNode(ptt);
   document.getElementById("profile_button").setAttribute("href","profile.php");
   document.getElementById("profile_button").innerHTML="profile";
   
   var hs=document.getElementsByTagName("a")[29];
   var hstt=document.createAttribute("id");
   hstt.value="history_button";
   hs.setAttributeNode(hstt);
   document.getElementById("history_button").setAttribute("href","histroy.php");
   document.getElementById("history_button").innerHTML="history";
}