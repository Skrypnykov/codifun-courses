var girls=["Ann","Sonia","Erika","Lisa","Alexa"];
var content=document.getElementById("table");
var rezult="<table><tr>";
for (var row=0;row<girls.length;row++){
    rezult+="<td>"+girls[row]+"</td>";
}
rezult+="</tr></table>";
content.innerHTML=rezult;