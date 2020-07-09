var newP = document.createElement("p");
var txt = document.createTextNode("New text");
newP.appendChild(txt);
document.getElementById("head1").after(newP);