var girls=["Ann","Sonia","Erika","Lisa","Alexa"];
var content=document.getElementById("table");
var rezult="<table><tr>";
for (var row in girls){
    rezult+="<td>"+girls[row]+"</td>";
}
rezult+="</tr></table>";
content.innerHTML=rezult;