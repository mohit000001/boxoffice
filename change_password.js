function password_validation(str)
{
    
if(str.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/)&&str.length<15&&str!="")
    {
      document.getElementById("password_warning").innerHTML="";  
       
    }
  else
  {
      document.getElementById("password_warning").innerHTML="* Password length must be of minium 8 digits and <br> 1 uppercase letter and <br> 1 lowercase letter and one specail symbol required ";
  }  
}
function password_strenth(str)
{
    
    document.getElementById("password_strenth_image").createElement="<center></center>";
    
    l=str.length;
    if(l<6)
        {
          document.getElementById("password_strenth_image").style.width="50px";
           
          document.getElementById("password_strenth_image").style.color="white";
            document.getElementById("password_strenth_image").style.display="block";
            document.getElementById("password_strenth_image").style.backgroundColor="red";   
          document.getElementById("password_strenth_image").innerHTML="Week";   
        }
   else
        {
          if(l>=6)
            { 
                document.getElementById("password_strenth_image").style.width="100px";
           
               document.getElementById("password_strenth_image").style.color="white";
               document.getElementById("password_strenth_image").style.display="block";
               document.getElementById("password_strenth_image").style.backgroundColor="orange";   
              document.getElementById("password_strenth_image").innerHTML="meduim";
             }
            if(l>10)
                {
                  document.getElementById("password_strenth_image").style.width="200px";
           
               document.getElementById("password_strenth_image").style.color="white";
               document.getElementById("password_strenth_image").style.display="block";
               document.getElementById("password_strenth_image").style.backgroundColor="green";   
              document.getElementById("password_strenth_image").innerHTML="strong";  
                }
        }
}
function re_password_validation(str)
{
    var pass=document.change_password_form.new_pass.value; 
    
    if(str.match(pass)&&pass.length<15&&pass!="")
    {
      document.getElementById("re-password_warning").innerHTML="";  
    }

  else
  {
      document.getElementById("re-password_warning").innerHTML="* Password not matched";
  }  
    
    
}
function full_val_che()
  {
     var pass1=document.change_password_form.new_pass.value;
	 var pass2=document.change_password_form.re_new_pass.value;
  
     if(pass1.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/)&&pass2.match(pass1)&&pass1.length<15&&pass1!="")
	  {
	    return true;
	  }
	 else
     {
	    document.getElementById("cilentside_pass_warning").style.display="block"; 
        if($(document).width()<400)
	{
	  window.scroll(0,40);
	}
	else
	{
    window.scroll(0,400);
    }		
		return false;
	 }	 
  }
  
function server_side_ac_conform_error()
{
    document.getElementById("serverside_pass_warning").style.display="block"; 
	if($(document).width()<400)
	{
	  window.scroll(0,40);
	}
	else
	{
    window.scroll(0,400);
    }
} 
function empty_officle_form_data()
{
  document.change_password_form.new_pass.value="";
  document.change_password_form.re_new_pass.value="";

} 