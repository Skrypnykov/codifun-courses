var fruits=["apple","banana","pear","peach","grapes"];
var leng=fruits.length, items="";
for(var i=0;i<leng;i++){
    items+="<li>"+fruits[i]+"</li>";
}
document.getElementById("rez").innerHTML=items;