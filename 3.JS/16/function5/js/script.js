function areaCon(){
    var pi=Math.PI, diameter=5, lateralLength=7;
    function areaCicle(pi, r){
        return Math.round(pi*r*r);
    }
    function areaLateral(pi, r, s){
        return Math.round(pi*r*s);
    }
    return areaCicle(pi, diameter)+areaLateral(pi, diameter, lateralLength);
}
document.getElementById("rez").innerHTML=`Площадь конуса составляет ` + areaCon();
