function lineLength(str){
    var result=0;
    result=str.length;
    return result;
}
var source=document.getElementById("source").innerHTML;
document.getElementById("rez").innerHTML="Расчетная длина текста "+lineLength(source);