function event1_animation()
{
 //document.getElementById("event1_text").style.color="red";
  
 
 var x=-300;    
 var a=setInterval(ani,30);
    
  function ani()
    {
        
     document.getElementById("event1_text").style.bottom=x+"px";
     
      x++;
     if(x==1050)
         { 
		     
             x=-300;
         }
     
    }
}	
function event2_animation()

{	
var y=-300;    
 var b=setInterval(ani1,30);
    
  function ani1()
    {
        
     document.getElementById("event2_text").style.bottom=y+"px";
     
      y++;
     if(y==1050)
         { 
		     
             y=-300;
         }
     
    }
}
function event3_animation()
{
var z=-300;    
 var c=setInterval(ani2,30);
    
  function ani2()
    {
        
     document.getElementById("event3_text").style.bottom=z+"px";
     
      z++;
     if(z==1050)
         { 
		     
             z=-300;
         }
     
    }
}
function event4_animation()
{
var v=-300;    
 var d=setInterval(ani3,30);
    
  function ani3()
    {
        
     document.getElementById("event4_text").style.bottom=v+"px";
     
      v++;
     if(v==1050)
         { 
		     
             v=-300;
         }
     
    }	
    
}

function event_server_side(str)
  {
  
     if(str.match("login"))
	   {
	   
	    document.getElementById("login_notice_on_event").style.display="block";
	    if($(document).width()<400)
  {
    window.scroll(0,0);
  }
  else
  {
  window.scroll(0,400);
  }
	   }
  
     if(str.match("ac_con"))
	  {
	     document.getElementById("conform_account_notice_on_event").style.display="block";
	    if($(document).width()<400)
  {
    window.scroll(0,0);
  }
  else
  {
  window.scroll(0,400);
  }
	    
	  }
     
  
  
  }



