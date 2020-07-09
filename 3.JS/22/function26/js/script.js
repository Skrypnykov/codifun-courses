var girls=["Ann","Sonia","Erika","Lisa","Alexa"];
var content=document.getElementById("table");
var result="<table><tr>";
function showElem(item,index,arr){
    arr[index]="<td>"+item+"</td>";
    result+=arr[index];
}
girls.forEach(showElem);
result+="</tr></table>";
content.innerHTML=result;