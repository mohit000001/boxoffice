function server_side_img_error(str)
 {
   document.getElementById("technical_warning").style.display="block";
   window.scroll(0,400);
  
   switch(str)
    {
	
	  case 1:document.getElementById("technical_warning").innerHTML="THE SIZE OF UPLOADED IMAGE IS GREATER THEN 1 MB ,UPLOAD A IMAGE SIZE WITHIN 1 MB";
	                                                                                                      
	  break;
	  
	  case 2:document.getElementById("technical_warning").innerHTML="THE  UPLOADED IMAGE IS NOT AN IMAGE";
	  break;
	  
	  case 3:document.getElementById("technical_warning").innerHTML="THE  UPLOADED IMAGE IS NOT AN JPG OR PNG UPLOAD ONLY JPG OR PNG";
	  break;
	  
	  case 4:document.getElementById("technical_warning").innerHTML="DUE TO SOME TECHNICAL ERROR YOUR PROFILE PIC WAS NOT SUCCESSFULLY UPLOADED TRY AFTER SOME TIME OR TRY LATER";
	  break;
	  
	  default:break;
	}
 
 
 }
 function validation()
 {
   var image=document.getElementById("profile_pic_input_box").value;
   if(image=="")
   {      
          document.getElementById("technical_warning").style.display="block";
          window.scroll(0,400);
          document.getElementById("technical_warning").innerHTML="YOU HAVEN'T SELECTED ANY IMAGE ,PLESE SELECT AN IMAGE BY CLICKING ON BROWER BUTTON BELOW";
	      return false;
	} 
	else
	{
         var fil=image.split('.');
		 if(fil[1].match("jpg")||fil[1].match("png"))
		  {
		    return true;
		  }
		 else
          {
		    
			document.getElementById("technical_warning").style.display="block";
            window.scroll(0,400);
		    document.getElementById("technical_warning").innerHTML="THE  UPLOADED IMAGE IS NOT AN JPG OR PNG OR IT IS NOT AN IMAGE UPLOAD ONLY JPG OR PNG";
			return false;
		  }	
        
       		
	}	 
 }

 
 
 
 
 
 
 
 
 