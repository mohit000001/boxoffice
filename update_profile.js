var uppro_email_name_veri="verified";
var uppro_mobile_name_veri="verified";

function server_side_update_warning()
 {
    document.getElementById("server_side_update_details_warning").style.display="block";
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

function profile_updation_full_validation()
{
   var rel=document.profile_updation.relationship.value;
   if(rel!="")
   {
    
   }
   else
   {
     document.getElementById("relation_warning").style.display="block";
	 window.scroll(0,1200);
	 return false;
     
   }
 document.getElementById("relation_warning").style.display="none";  
var couu=document.profile_updation.state.value;
   
    if(couu=="select state")
        {
           document.getElementById("update_details_warning").style.display="block"; 
           window.scroll(0,400); document.getElementById("cou_warning").innerHTML=" * Must select your state";
           return false;   
        } 
		else
		{
		  document.getElementById("cou_warning").innerHTML="";
		}
var couu=document.profile_updation.city.value;
   
    if(couu=="select city")
        {
           document.getElementById("update_details_warning").style.display="block"; 
           window.scroll(0,400); document.getElementById("cou_warning").innerHTML=" * Must select your city";
           return false;   
        } 	
     else
         {
		    document.getElementById("cou_warning").innerHTML="";
		 }	 
  if(document.profile_updation.nick_name.value.length<30&&document.profile_updation.high_shcool.value.length<50&&document.profile_updation.j_college.value.length<50&&document.profile_updation.bach_education.value.length<50&&document.profile_updation.lang.value.length<30&&document.profile_updation.currtent_work.value.length<30&&document.profile_updation.self_info.value.length<500&&document.profile_updation.mail.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)&&document.profile_updation.mob_no.value.match(/^[0-9]+$/)&&document.profile_updation.mob_no.value.length==10&&document.profile_updation.pin.value.length<11&&document.profile_updation.pin.value.match(/^[0-9]+$/)&&document.profile_updation.add1.value.length<50&&document.profile_updation.add1.value.length>0&&document.profile_updation.add2.value.length<50)
   {
         if(window.uppro_mobile_name_veri.match("verified")&&window.uppro_email_name_veri.match("verified"))
           {
			
    
                return true;
			}
          else
           {
		     alert("ddd")
		     document.getElementById("update_details_warning").style.display="block";
	         window.scroll(0,400);
	         return false;
		   
		   }	  
   }
   else
   {
     alert("d")
     document.getElementById("update_details_warning").style.display="block";
	 window.scroll(0,400);
	 return false;
   }



}




function select_state(str_cou)
{
     var countery= new Array();
     countery['india']= new Array("select state","maharastra","punjab","rajasthan","+91");
     countery['usa']= new Array("select state","fetch","gokil","royal","+01");
     countery['canda']= new Array("select state","hoityo","hell","pipo","+02");
     countery['russia']= new Array("select state","solud","lodd","rajthan","+33");
    
     
        
     // document.getElementById("countery_mobile_code").innerHTML=countery[str_cou][4];
     selectField = document.getElementById("state"); 
     selectField.options.length = 0;  
            for(i=0;i<4;i++)
                {
                  selectField.options[selectField.length]= new Option(countery[str_cou][i],countery[str_cou][i]);
                }
 
   
    
}
    
function select_city(str_cou) 

{
        
    
    var state= new Array();
    
    state['india']=new Array();
    
    state['india']['maharastra']=new Array("select city","nagpur","mumbai","pune");
    state['india']['punjab']=new Array("select city","amritsar","lodiyana","chandighar");
    state['india']['rajasthan']=new Array("select city","jaipur","jodhpur","jaisalmer");
    
     
    state['usa']=new Array();
    
    state['usa']['fetch']=new Array("select city","king","calighjt","skfjhksd");
    state['usa']['gokil']=new Array("select city","mokhj","dsfjk","mgdtf");
    state['usa']['royal']=new Array("select city","wew","dfffd","dsfkos");
    
    state['canda']=new Array();
    
    state['canda']['hoityo']=new Array("select city","sdfsd","cxc","cxvxc");
    state['canda']['hell']=new Array("select city","ytuy","eda","ujhnj");
    state['canda']['pipo']=new Array("select city","ikuyjk","qwe","dgd");
    
    state['russia']=new Array();
    
    state['russia']['solud']=new Array("select city","ewq","mum","pue");
    state['russia']['lodd']=new Array("select city","amrir","lyana","chaghar");
    state['russia']['rajthan']=new Array("select city","jaidfd","jodpu","jaisdder");
  
 
  
     var country=document.profile_updation.country.value;
     var sta=document.profile_updation.state.value;
    
     selectField = document.getElementById("city"); 
     selectField.options.length = 0;
    
            for(var i=0;i<state[country][sta].length;i++)
                {
                  selectField.options[selectField.length]= new Option(state[country][sta][i],state[country][sta][i]);
                }
    
}

function mail_validation(str)
{
    if(str.length<30) 
	{
	
           if(str.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
           {
            document.getElementById("mail_warning").innerHTML="";  
       
           }
           else
          {
              document.getElementById("mail_warning").innerHTML="* Invaild email";
           }
    }
   else
    {
	 document.getElementById("mail_warning").innerHTML="* Invaild email";
	}   
}

function pin_validation(str)
{
    
if(str.match(/^[0-9]+$/)&&str.length<10)
    {
      document.getElementById("pin_warning").innerHTML="";  
       
    }
  else
  {
      document.getElementById("pin_warning").innerHTML="* Pincode should only contain numbers and don't include space and it must be less then 11 digits";
  }  
}
function mob_validation(str)
{
    
if(str.match(/^[0-9]+$/)&&str.length==10)
    {
      document.getElementById("mob_warning").innerHTML="";  
       
    }
  else
  {
      document.getElementById("mob_warning").innerHTML="* Mobile Number should only contain numbers and it must of 10 digits and don't include space ";
  }  
}
function add1_validation(str)
{
    
if(str.length<50)
    {
      document.getElementById("add1_warning").innerHTML="";  
       
    }
  else
  {
      document.getElementById("add1_warning").innerHTML="* Address line should be only of 50 charcters only ";
  }  
}
function add2_validation(str)
{
    
if(str.length<50)
    {
      document.getElementById("add2_warning").innerHTML="";  
       
    }
  else
  {
      document.getElementById("add2_warning").innerHTML="* Address line should be only of 50 charcters only ";
  }  
}



   
function uppro_email_selection(str)
{
 if(str.length<30)
 {
      if(str.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
	    {
              
               

                     if (window.XMLHttpRequest) {
                     
                       xmlhttp_email=new XMLHttpRequest();
                      } else {  
                     xmlhttp_email=new ActiveXObject("Microsoft.XMLHTTP");
                     }
                     xmlhttp_email.onreadystatechange=function() {
                    if (xmlhttp_email.readyState==4 && xmlhttp_email.status==200) {
                    if(xmlhttp_email.responseText.match("yes"))
					    {
						   window.uppro_email_name_veri="nonever";
						   document.getElementById("uppro_email_exists").style.display="inline-block";
						   document.getElementById("uppro_email_not_exists").style.display="none";
						}
						else
						{
						   window.uppro_email_name_veri="verified";
						   document.getElementById("uppro_email_not_exists").style.display="inline-block";
						   document.getElementById("uppro_email_exists").style.display="none";
						}
                     }
                     }
                    xmlhttp_email.open("GET","uppro_check_email_available_or_not.php?emailaddress="+str,true);
                    xmlhttp_email.send();


		
		
		}
	  
  
    }
}	
	function uppro_mobile_number_selection(str)
	
	 {
	       if(str.match(/^[0-9]+$/)&&str.length==10)
	    {
              
               

                     if (window.XMLHttpRequest) {
                     
                       xmlhttp_email=new XMLHttpRequest();
                      } else {  
                     xmlhttp_email=new ActiveXObject("Microsoft.XMLHTTP");
                     }
                     xmlhttp_email.onreadystatechange=function() {
                    if (xmlhttp_email.readyState==4 && xmlhttp_email.status==200) {
                    if(xmlhttp_email.responseText.match("yes"))
					    {
						   window.uppro_mobile_name_veri="nonever";
						   document.getElementById("uppro_mobile_exists").style.display="inline-block";
						   document.getElementById("uppro_mobile_not_exists").style.display="none";
						}
						else
						{
						   window.uppro_mobile_name_veri="verified";
						   document.getElementById("uppro_mobile_not_exists").style.display="inline-block";
						   document.getElementById("uppro_mobile_exists").style.display="none";
						}
                     }
                     }
                    xmlhttp_email.open("GET","uppro_check_mobile_available_or_not.php?mobile="+str,true);
                    xmlhttp_email.send();


		
		
		}
	   if(!str.match(/^[0-9]+$/)||str.length!==10)
	    {
		  document.getElementById("uppro_mobile_not_exists").style.display="none";
		  document.getElementById("uppro_mobile_exists").style.display="none";
		}
	 
	 
	 }


