function show_comments(str)
{   
var str=".server_data_post"+str;
$(document).ready(function(){
$(str).toggle(1000);
});
}

function show_share_option(str)
{
       var str="#share_options"+str;
        $(document).ready(function(){
		$(str).toggle(1000);
		});

	
}
function comment_arengment_fun(str)
 {
    show_comments(str);
 }
function share_arengment_fun(str)
 {
    show_share_option(str);
 } 

function login_error()
{
  document.getElementById("login_error_a").style.display="block";
  window.scroll(0,300);
}
function ac_error()
{
  document.getElementById("ac_error").style.display="block";
  window.scroll(0,300);
}
function user_not_login_or_unactivate()
{
  window.scroll(0,300);
  

}


function ajax_system_for_comment()
{
   var x=setInterval(show_all_comment,1000);
    
	function show_all_comment()
	{
	   if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
         document.getElementById("get_new_comment").innerHTML=xmlhttp.responseText;
      }
     }
     xmlhttp.open("GET","auto_comment_ajax.php?pos=post1",true);
     xmlhttp.send();
	
	
	}

}
function ajax_system_for_fetching_data()
 {
    var y=setInterval(get_data,1000);
    
	function get_data()
	{
	   if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_d=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_d=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_d.onreadystatechange=function() {
      if (xmlhttp_d.readyState==4 && xmlhttp_d.status==200) {
         document.getElementById("get_post_details").innerHTML=xmlhttp_d.responseText;
      }
     }
     xmlhttp_d.open("GET","auto_liking_ajax.php?",true);
     xmlhttp_d.send();
 
 }
 }
function set_post_data()
{
   var z=setInterval(set_data,300);
   function set_data()
   {
   var post=document.getElementById("get_post_details").innerHTML;
   var details=post.split(",");
   if(details[0].match("yes"))
     {
	   
	   document.getElementById("like_button").setAttribute("src","like.jpg");
	 }
    else
	 {
	     document.getElementById("like_button").setAttribute("src","not_like.jpg");
	 
	 }
	 document.getElementById("likes").innerHTML=details[1];
	 document.getElementById("comments").innerHTML=details[2];
	 document.getElementById("shares").innerHTML=details[3];
	} 
}
function perform_like_operation_post1_specail()
 {
     if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_kk=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_kk=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_kk.onreadystatechange=function() {
      if (xmlhttp_kk.readyState==4 && xmlhttp_kk.status==200) {
        
      }
     }
     xmlhttp_kk.open("GET","post1_like_ajax.php?",true);
     xmlhttp_kk.send();
 
}

function perform_comment_operation() 
{
  var com=document.comment_form.user_comment.value;
  if(com=="")
   {
     return false;
   }
  
       if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_c=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_c=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_c.onreadystatechange=function() {
      if (xmlhttp_c.readyState==4 && xmlhttp_c.status==200) {
	        document.comment_form.user_comment.value="";
      }
     }
     xmlhttp_c.open("GET","comment_entry.php?comment="+com,true);
     xmlhttp_c.send();

}

function perform_sharing_operation(str)
{
        if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_c=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_c=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_c.onreadystatechange=function() {
      if (xmlhttp_c.readyState==4 && xmlhttp_c.status==200) {
      }
     }
     xmlhttp_c.open("GET","sharing_operation_ajax.php?distination="+str,true);
     xmlhttp_c.send();
     window.open("https://www."+str+".com","_blank");
  
}

function perform_like_operation_common(str)
 {
   
    var get_data="get_post_details"+str;
    if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_l=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_l=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_l.onreadystatechange=function() {
      if (xmlhttp_l.readyState==4 && xmlhttp_l.status==200) {
        document.getElementById(get_data).innerHTML=xmlhttp_l.responseText; 
	    set_comm_post_data(str,get_data);
	   //alert(xmlhttp_l.responseText)
      }
     }
     xmlhttp_l.open("GET","perform_like_ajax.php?post="+str,true);
     xmlhttp_l.send();
    
   
 
     
     
 }
 
 function set_comm_post_data(str,get_data)
  {

   var post_com=document.getElementById(get_data).innerHTML;
   var details_com=post_com.split(",");
   var li_b="like_button"+str;
   var li="likes"+str;
   var co="comments"+str;
   var sh="shares"+str;
   if(details_com[0].match("yes"))
     {
	   
	   document.getElementById(li_b).setAttribute("src","like.jpg");
	 }
    else
	 {
	     document.getElementById(li_b).setAttribute("src","not_like.jpg");
	 
	 }
	 document.getElementById(li).innerHTML=details_com[1];
	 document.getElementById(co).innerHTML=details_com[2];
	 document.getElementById(sh).innerHTML=details_com[3];
  
  
     var get_com="get_new_comment"+str; 
	if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_cc=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_cc=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_cc.onreadystatechange=function() {
      if (xmlhttp_cc.readyState==4 && xmlhttp_cc.status==200) {
         document.getElementById(get_com).innerHTML=xmlhttp_cc.responseText;
      }
     }
     xmlhttp_cc.open("GET","auto_comment_ajax.php?pos="+str,true);
     xmlhttp_cc.send(); 
  
  
  }
  
function perform_comment_operation_common(str)
 {
    
	var dd="user_comment"+str;
	var com_co=document.getElementsByName(dd)[0].value;

   if(com_co=="")
   {
     
     return false;
   }
  
 
        var get_data="get_post_details"+str;
      if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_cc=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_cc=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_cc.onreadystatechange=function() {
      if (xmlhttp_cc.readyState==4 && xmlhttp_cc.status==200) {
	  
        document.getElementById(get_data).innerHTML=xmlhttp_cc.responseText; 
	    document.getElementsByName(dd)[0].value="";
	    set_comm_post_data(str,get_data);
		
      }
     }
     xmlhttp_cc.open("GET","perform_comment_ajax.php?post="+str+"&comment="+com_co,true);
     xmlhttp_cc.send();
     
 }  
function perform_sharing_operation_common(dis,str)
 {
 
    var get_data="get_post_details"+str;
    if (window.XMLHttpRequest) {
       // code for IE7+, Firefox, Chrome, Opera, Safari
       xmlhttp_ss=new XMLHttpRequest();
      } else {  // code for IE6, IE5
      xmlhttp_ss=new ActiveXObject("Microsoft.XMLHTTP");
     }
     xmlhttp_ss.onreadystatechange=function() {
      if (xmlhttp_ss.readyState==4 && xmlhttp_ss.status==200) {
	  
	    document.getElementById(get_data).innerHTML=xmlhttp_ss.responseText;
		set_comm_post_data(str,get_data);
		window.open("https://www."+dis+".com","_blank");
      }
     }
     xmlhttp_ss.open("GET","perform_share_ajax.php?distination="+dis+"&postt="+str,true);
     xmlhttp_ss.send();
     
 
 }


    