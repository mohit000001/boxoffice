var z=1;
var x=2;
var y=3;

var b=setInterval(image_ani,1000);

function image_ani()
{
    str="movie"+z+".jpg";
   str2="movie"+x+".jpg";
   str3="movie"+y+".jpg";
      
    document.getElementById("threter1").setAttribute("src",str);
    document.getElementById("threter2").setAttribute("src",str2);
    document.getElementById("threter3").setAttribute("src",str3);
    
    x++;
    z++;
    y--;

    if(y==1) { y=3; }
    
    if(x==4) { x=2; }
    
    if(z==4) { z=1; }
   
}