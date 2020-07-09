function Programmer(name,surname,year,spec){
    this.name=name;
    this.surname=surname;
    this.yearB=year;
    this.specialization="Software Development";
    this.fulName=function(){return this.name+" "+this.surname;};
    this.getSpecialization=function(){return this.specialization;};
}
var employee1 = new Programmer("Ivanov","Jean",1990,"Javascript");
var employee2 = new Programmer("John","Doe",1994,"PHP");
document.getElementById("info").innerHTML=employee2.getSpecialization();