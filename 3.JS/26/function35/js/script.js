var temp = {
    values:[10,-7,-5,17,3],
    get countPositive(){
        var count =0;
        for (var i in this.values){
            count+=(this.values[i]>0)?1:0;
        }
    return count;
    }
}
document.getElementById("info").innerHTML=temp.countPositive;