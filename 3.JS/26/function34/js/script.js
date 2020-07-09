var person ={
    name:"Jones",
    surname:"Indiana",
    sex:"M",
    birth:1970,
    getBirthYear: function(){
        return this.birth;
    }
}
document.getElementById("info").innerHTML=person.getBirthYear();