var programmer = new Object();
programmer.name="Black";
programmer.surname="Johnny";
programmer.company="XXX";
programmer.year_empl=2015;
programmer["technology"]="JavaScript";
var text="Object 'Programmer':<br/>";
for (key in programmer){
text += key+": "+programmer[key]+"<br/>";
};
document.getElementById("info").innerHTML=text;