function circleLength(radius){
    var pi=Math.PI;
    return 2*pi*radius;
}
var radius=20;
document.getElementById("rez").innerHTML=`Расчетная длина окружности с радиусом ${radius} составляет ` + Math.round(circleLength(radius));