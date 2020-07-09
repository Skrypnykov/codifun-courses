var abbr="CASE", i=0;
var mess="";
var leng=abbr.length;
while(i<leng){
    mess+="<li>"+abbr[i]+"</li>";
    i++;
}
document.getElementById("rez").innerHTML=mess;