var temp = {
    values:[10,-7,-5,17,3],
    set addValue(val){
        this.values.push(val);
        }
    }
temp.addValue=-15
document.getElementById("info").innerHTML=temp.values;