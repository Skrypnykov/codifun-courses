var abbr="CASE", i=0;
var mess="";
var leng=abbr.length;
do{
    mess+="<li>"+abbr[i]+"</li>";
    i++;
}
while(i<leng);
document.getElementById("rez").innerHTML=mess;