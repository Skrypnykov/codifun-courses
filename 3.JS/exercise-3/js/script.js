var nr=0;
restart(nr);
function catchNumber(){
    var mess = "";
    var val = document.getElementById("nr").value;
    mess = ((val>=nr-10)&&(val<=nr+10))?"Тепло":"Холодно";
    if(val==nr){mess="<span class=`win`>Это оно!!!</span>";}
    document.getElementById("rez1").innerHTML=mess;
    document.getElementById("gen").innerHTML=val;
}
function enterNumber(){
    var val=document.getElementById("txt").value;
    var templ=/^[0-9]{1,2}$/;
    var mess="";
    if(!(templ.test(val))){
        mess="Введите целои число из одной или двух цифр!";
    }
    else if(!(val==nr)){
        mess="Попробуй еще раз!";
    } else {
        mess="Браво! Ты угадал число!"
    }
    document.getElementById("rez2").innerHTML=mess;
}
function restart(){
    nr=Math.floor(Math.random(nr)*78);
    document.getElementById("rez1").innerHTML="";
    document.getElementById("rez2").innerHTML="";
    document.getElementById("txt").value="";
    document.getElementById("nr").value="";
    document.getElementById("gen").value="";
}