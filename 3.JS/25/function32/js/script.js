var programmer = new Object();
programmer.name="Black";
programmer.surname="Сергей";
programmer.company="XXX";
programmer.year_empl=2015;
programmer["technology"]="JavaScript";
delete programmer["technology"];
document.getElementById("info").innerHTML=programmer['technology'];