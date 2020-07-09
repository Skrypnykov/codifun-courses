var girls=["Ann","Sonia","Erika","Lisa","Alexa"];
var content=document.getElementById("table");
var result="<table><tr>";
function showElem(item){
    result+="<td>"+item+"</td>";
}
girls.forEach(showElem);
result+="</tr></table>";
content.innerHTML=result;