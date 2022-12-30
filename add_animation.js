var u=1;

var b=setInterval(image_ani,1000);

function image_ani()
{
str4="add_ani"+u+".jpg"; 
  document.getElementById("add").setAttribute("src",str4);
    
   
    u++;
    if(u==3)
        {
            u=1;
        }
   
}