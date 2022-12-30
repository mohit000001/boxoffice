function login_fail()
{
  document.getElementById("login_fail_warning").style.display="block";
  if($(document).width()<400)
  {
    window.scroll(0,20);
  }
  else
  {
  window.scroll(0,500);
  }
}
function change_pass_su()
{

  
  document.getElementById("change_pass_notice").style.display="block";
  if($(document).width()<400)
  {
    window.scroll(0,20);
  }
  else
  {
  window.scroll(0,500);
  }

}
function validate_login()
{
   var i=document.login_form.box_id.value;
   if(i.length>30||i=="")
    {
	  document.getElementById("login_fail_warning").style.display="none";
	  document.getElementById("login_warning_client_side").style.display="block";
	  document.getElementById("login_warning_client_side").innerHTML="ID LENGTH MUST NOT BE GREATER THEN 15 CHARTER AND IT SHOULD NOT BE BLANK";
	  return false;
	}
   var p=document.login_form.box_pass.value;
   if(p!=""&&p.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/))
   {
     return true;
   }
   else
   {
      document.getElementById("login_fail_warning").style.display="none";
      document.getElementById("login_warning_client_side").style.display="block";
      document.getElementById("login_warning_client_side").innerHTML="INVALID PASSWORD";
	  return false;
   }
}
