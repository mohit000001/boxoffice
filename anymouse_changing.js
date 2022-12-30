window.miter="no";

function anymouse_user()
{
  var h=document.getElementsByTagName("a")[4];
   var htt=document.createAttribute("id");
   htt.value="home_button";
   h.setAttributeNode(htt);
   document.getElementById("home_button").setAttribute("href","home.php");
   
   var ab=document.getElementsByTagName("a")[5];
   var abtt=document.createAttribute("id");
   abtt.value="about_button";
   ab.setAttributeNode(abtt);
   document.getElementById("about_button").setAttribute("href","about_us.php");
   
   var c=document.getElementsByTagName("a")[6];
   var ctt=document.createAttribute("id");
   ctt.value="contact_button";
   c.setAttributeNode(ctt);
   document.getElementById("contact_button").setAttribute("href","contact_us.php");
   
   var g=document.getElementsByTagName("a")[7];
   var gtt=document.createAttribute("id");
   gtt.value="gallary_button";
   g.setAttributeNode(gtt);
   document.getElementById("gallary_button").setAttribute("href","gallary.php");
   
   var e=document.getElementsByTagName("a")[8];
   var ett=document.createAttribute("id");
   ett.value="event_button";
   e.setAttributeNode(ett);
   document.getElementById("event_button").setAttribute("href","events.php");
   
   var top=document.getElementsByTagName("link")[2];
   var toptt=document.createAttribute("id");
   toptt.value="top_bar_style";
   top.setAttributeNode(toptt);
   
   /*var nave=document.getElementsByTagName("nav")[0];
   var navtt=document.createAttribute("id");
   navtt.value="main_menue_of_boxoffice";
   nave.setAttributeNode(navtt);*/
   
   var ige=document.getElementsByTagName("img")[0];
   var igtt=document.createAttribute("id");
   igtt.value="boxoffice_top_logo";
   ige.setAttributeNode(igtt);
   
   $(document).ready(function(){
		$("nav").before("<div id='show_main_menu' onclick='menues_fun()'>Menu<img style='margin-left:3px;' id='drop_down' src='dropdown_arrow_down.jpg' height=5px width=8px/></div>");
		});	
   
   if(navigator.userAgent.indexOf("Chrome")!=-1)
 {
  document.getElementById("top_bar_style").setAttribute("href","chrome_top_bar.css");  
 }
   document.getElementsByTagName("nav")[0].setAttribute;
   document.getElementsByTagName("a")[10].setAttribute("href","#");
   document.getElementsByTagName("a")[25].setAttribute("href","#");
   document.getElementsByTagName("a")[11].setAttribute("href","#");
   document.getElementsByTagName("a")[15].setAttribute("href","#");
   document.getElementsByTagName("a")[19].setAttribute("href","#");
}
function menues_fun()
{
  
  if(window.miter.match("no"))
  {
    $(document).ready(function(){
    //$("#show_main_menu").click(function(){
		$("nav ul li").toggle(100);
		});	
	//});   
   window.miter="yes";
   document.getElementById("drop_down").setAttribute("src","dropdown_arrow_up.jpg");
  }
  else
  {
    $(document).ready(function(){
    //$("#show_main_menu").click(function(){
		$("nav ul li").toggle(100);
		});	
	//});   
   window.miter="no";
   document.getElementById("drop_down").setAttribute("src","dropdown_arrow_down.jpg");
  }


} 