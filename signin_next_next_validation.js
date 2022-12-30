function optional_details_warning()
 {
    document.getElementById("server_side_optional_details_warning").style.display="block";
   window.scroll(0,400);
 
 }
function nname_validation(str)
{
  if(str.length>30)
    {
	 document.getElementById("nname_warning").innerHTML="* nick name must be less than 30 charcters";
	 
	}
	else
	{
	  document.getElementById("nname_warning").innerHTML="";
	}

}
function hs_validation(str)
{
  if(str.length>50)
    {
	 document.getElementById("hc_warning").innerHTML="* High shcool must be less than 50 charcters";
	 
	}
	else
	{
	  document.getElementById("hc_warning").innerHTML="";
	}

}
function jc_validation(str)
{
  if(str.length>50)
    {
	 document.getElementById("jc_warning").innerHTML="* junior college must be less than 50 charcters";
	 
	}
	else
	{
	  document.getElementById("jc_warning").innerHTML="";
	}

}
function eq_validation(str)
{
  if(str.length>50)
    {
	 document.getElementById("eq_warning").innerHTML="* 12+ Education must be less than 50 charcters";
	 
	}
	else
	{
	  document.getElementById("eq_warning").innerHTML="";
	}

}
function lang_validation(str)
{
  if(str.length>30)
    {
	 document.getElementById("lang_warning").innerHTML="* Languages  must be less than 30 charcters";
	 
	}
	else
	{
	  document.getElementById("lang_warning").innerHTML="";
	}

}
function cw_validation(str)
{
  if(str.length>30)
    {
	 document.getElementById("cw_warning").innerHTML="* Current work must be less than 30 charcters";
	 
	}
	else
	{
	  document.getElementById("cw_warning").innerHTML="";
	}

}
function ab_validation(str)
{
  if(str.length>500)
    {
	 document.getElementById("ab_warning").innerHTML="* About must be less than 500 charcters";
	 
	}
	else
	{
	  document.getElementById("ab_warning").innerHTML="";
	}

}
function religion_validation(str)
{
   if(str=="")
    {
	document.getElementById("religion_warning").innerHTML="* Please select a proper religion from drop down list";
	
	}
	else
	{
	  document.getElementById("religion_warning").innerHTML="";
	}
}

function optional_full_validation()
{
   var rel=document.new_account_option_details.relationship.value;
   if(rel!="")
   {
     document.getElementById("relation_warning").style.display="none";
   }
   else
   {
     document.getElementById("relation_warning").style.display="block";
	 window.scroll(0,600);
	 return false;
     
   }
   
   var reli=document.new_account_option_details.religion.value;
   
   if(reli!="")
    {
	 document.getElementById("religion_warning").innerHTML="";
	}
	else
	{
	 document.getElementById("religion_warning").innerHTML="* Please select a proper religion from drop down list";
	 window.scroll(0,600);
	 return false;
	}
   
  if(document.new_account_option_details.nick_name.value.length<30&&document.new_account_option_details.high_shcool.value.length<50&&document.new_account_option_details.j_college.value.length<50&&document.new_account_option_details.bach_education.value.length<50&&document.new_account_option_details.lang.value.length<30&&document.new_account_option_details.currtent_work.value.length<30&&document.new_account_option_details.self_info.value.length<500)
   {
     
    
     return true;
   }
   else
   {
   
     document.getElementById("optional_details_warning").style.display="block";
	 window.scroll(0,400);
	 return false;
   }



}
