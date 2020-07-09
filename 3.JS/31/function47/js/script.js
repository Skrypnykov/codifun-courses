var elem = document.getElementById("container");
var find = elem.querySelectorAll("p span,p.error");
document.getElementById("rez").innerHTML+=find.length;