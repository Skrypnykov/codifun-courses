var abbr="CASE";
var mess="";
var leng=abbr.length;
for(var i=0;i<leng;i++){
    mess+="<li>"+abbr[i]+"</li>";
}
document.getElementById("rez").innerHTML=mess;