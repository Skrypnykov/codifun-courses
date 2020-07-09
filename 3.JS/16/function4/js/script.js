function areaCircle(r){
    return Math.round(pi*r*r);
}
var diameter=7; pi=Math.PI;
document.getElementById("rez").innerHTML=`Площадь круга с диаметром ${diameter} составляет ` + areaCircle(diameter);
document.getElementById("loc").innerHTML=`Давайте посмотрим на переменную функции `+pi;