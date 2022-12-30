function server_side_ac_conform_error()
  {
    document.getElementById("server_side_code_warning").style.display="block";
	document.getElementById("search_user").style.display="none";
	
	document.getElementById("user_details").style.display="none";
    document.getElementById("conform_account_box").style.display="block";
  }
 function server_side_wrong_code_ac_conform_error()
  {
    document.getElementById("server_side_wrong_code_warning").style.display="block";
		document.getElementById("search_user").style.display="none";
	
	document.getElementById("user_details").style.display="none";
    document.getElementById("conform_account_box").style.display="block";
  } 
function display_mail_form()
{
   document.getElementById("get_email_code").style.display="none";
   document.getElementById("email_verfication").style.display="block";
   document.getElementById("get_mobile_code").style.display="block";
   document.getElementById("mobile_verfication").style.display="none";
   document.getElementById("mobile_code_warning").style.display="none";
   document.getElementById("m_code").value="";
}
function display_mobile_form()
{
  
   document.getElementById("get_email_code").style.display="block";
   document.getElementById("email_verfication").style.display="none";
   document.getElementById("get_mobile_code").style.display="none";
   document.getElementById("mobile_verfication").style.display="block";
   document.getElementById("email_code_warning").style.display="none";
   document.getElementById("e_code").value="";
  

}
function email_ajax_vali(str)
  {
     if(str.match(/^[0-9]+$/))
	   {
	   
	     document.getElementById("email_code_warning").style.display="none";
	   }
     else
	  {
	    document.getElementById("email_code_warning").style.display="block";
	  
	  }
  
  
  }
 function mobile_ajax_vali(str)
  {
     if(str.match(/^[0-9]+$/))
	   {
	   
	     document.getElementById("mobile_code_warning").style.display="none";
	   }
     else
	  {
	    document.getElementById("mobile_code_warning").style.display="block";
	  
	  }
  
  
  } 
function mobile_con_validation()
  {
    document.getElementById("code_warning1").style.display="none";
	document.getElementById("code_warning").style.display="none";
	document.getElementById("code_warning2").style.display="none";
	document.getElementById("server_side_wrong_code_warning").style.display="none";
	document.getElementById("server_side_code_warning").style.display="none";
    str=document.mobile_verfication.mobile_code.value;
	if(str.length>10)
	  {
	   document.getElementById("code_warning2").style.display="block";
		return false; 
	  }
	if(str=="")
	  {
	    document.getElementById("code_warning1").style.display="block";
		return false;
	  }
    if(str.match(/^[0-9]+$/))
	{
	  return true;
	}
    else
	{
	  document.getElementById("code_warning").style.display="block";
	  return false;
	
	}
  
  } 
 function email_con_validation()
  {
    document.getElementById("code_warning1").style.display="none";
	document.getElementById("code_warning").style.display="none";
	document.getElementById("code_warning2").style.display="none";
	document.getElementById("server_side_wrong_code_warning").style.display="none";
	document.getElementById("server_side_code_warning").style.display="none";
    str=document.email_verfication.email_code.value;
	if(str.length>10)
	  {
	   document.getElementById("code_warning2").style.display="block";
		return false; 
	  }
	if(str=="")
	  {
	    document.getElementById("code_warning1").style.display="block";
		return false;
	  }
	
    if(str.match(/^[0-9]+$/))
	{
	  return true;
	}
    else
	{
	  document.getElementById("code_warning").style.display="block";
	  return false;
	
	}
  
  }   
  
  function show_recovery_options()
  {
    document.getElementById("search_user").style.display="none";
	
	document.getElementById("user_details").style.display="none";
    document.getElementById("conform_account_box").style.display="block";
	
	
      
  }
  function user_error()
  {
     document.getElementById("user_not_found").style.display="block";
    document.getElementById("search_user").style.display="block";
	
	document.getElementById("user_details").style.display="none";
    document.getElementById("conform_account_box").style.display="none";
  
  }