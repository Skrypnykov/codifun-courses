function yesHour(){
    setInterval(hour, 1000);
}
function hour(){
    var d = new Date();
    var hours = d.getHours(), minutes = d.getMinutes(), seconds = d.getSeconds();
    minutes = (minutes > 9)? minutes : `0` + minutes;
    seconds = (seconds > 9)? seconds : `0` + seconds;
    document.getElementById("rez").innerHTML= hours +":"+ minutes +":"+ seconds;
}