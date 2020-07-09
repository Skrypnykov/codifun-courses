var preferences=[
    ["Ann","Sonia","Erika"],
    ["apple","banana","pear"],
    ["rose","tulip","lily"]
];
var content=document.getElementById("table");
var rezult="<table>";
for (var row=0;row<preferences.length;row++){
    rezult+="<tr>";
    for(var col=0;col<preferences.length;col++){
        rezult+="<td>"+preferences[row][col]+"</td>";
    }
    rezult+="</tr>"
}
rezult+="</table>";
content.innerHTML=rezult;