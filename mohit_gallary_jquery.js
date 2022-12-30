
var x=1;
var i=1;
$(document).ready(function(){
for(i=1;i<11;i++)
{
$("#gallary_buttons").append("<button class='gallary_buttons_design'  type='button' value='"+i+"'onclick='gallary(this.value)'>"+i+"</button>");
}
});

function gallary(str)
{

 $(document).ready(function(){
  for(i=1;i<26;i++)
  {
    $("#gallary_image"+i).attr("src","gallary/"+str+"/"+i+".jpg");
  }
 });
}
