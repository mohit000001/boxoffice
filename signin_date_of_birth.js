var x=1;
var i=1;
 

function day_select()
{

   selectField = document.getElementById("day"); 
     selectField.options.length = 0;
    
            for(var i=1;i<32;i++)
                {
                  selectField.options[selectField.length]= new Option(i,i);
                }
    
     selectField = document.getElementById("year"); 
     selectField.options.length = 0;
    
            for(var i=2017;i>1900;i--)
                {
                  selectField.options[selectField.length]= new Option(i,i);
                }
    

}