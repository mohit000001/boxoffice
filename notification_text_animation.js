function notification_text_animation()
{
 document.getElementById("notification_text").style.color="lavender";
  
 
 var x=-475;    
 var a=setInterval(ani,30);
    
  function ani()
    {
        
     document.getElementById("notification_text").style.bottom=x+"px";
     
      x++;
     if(x==840)
         {
             x=-475;
         }
     
    }
    
}