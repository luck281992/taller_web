$(function() {
$("#slidebox").jCarouselLite({
vertical: false,
hoverPause:true,
visible: 1,
start: 0,
scroll: 1,
circular: true,
auto:1500,
speed:1500,
						
btnGo:
[".1",".2",".3",".4"],
		
afterEnd: function(a, to, btnGo)
    {
	   if(btnGo.length <= to){
	   to = 0;
	   }
	
    }
});
});

function textnomb() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}
function num() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;

 }

function validarsub() {
var op="";
var op2="";
var op3="";
var op4="";
var posicion=0;
op=document.getElementById("caja1").value;
we=document.getElementById("caja2").value;
ii=document.getElementById("caja3").value;
uu=document.getElementById("caja4").value;
 if(op=="")
{
  alert("falta contenido Nombre ");
return false;
}
 if(we=="")
{
  alert("falta contenido Email ");
return false;
}
if(ii=="")
{
  alert("falta contenido telefono ");
return false;
}
if(uu=="")
{
  alert("falta contenido Mensaje ");
return false;
}
if(op!=""&&we!=""&&uu!=""&&ii!="Select Industry")
  {
      alert("Se ha enviado satisfactoriamente su informacion");
     return true;
  }
 
}
$(document).ready(function(){
  $('#boton').click(function(){
   if(!validarsub())
  return false;
  });
  
});

$(document).ready(function(){
  $('#caja1').keypress(function(){
   textnomb();
  });
  
});

$(document).ready(function(){
  $('#caja2').keypress(function(){
   correo();
  });
  
});

function correo()
{
 email = document.getElementById("caja2").value;
 verif = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{3}$/
if (verif.test(email))
{
 event.returnValue = false;
}
} 
		