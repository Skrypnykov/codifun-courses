var d=new Date();
function greeting(){
    var hour=d.getHours();
    if(hour<=10) hello="morning";
    else if(hour<=16) hello="day";
    else hello="night";
    alert("Hello "+hello+"!");
}
function date(){
    document.getElementById("rez").innerHTML="Today is "+d.getDate()+"/"+(d.getMonth()+1)+"/"+d.getFullYear();
}
