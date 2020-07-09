function toggleBtn(){
    document.getElementById("drpDown").classList.toggle("show");
}
var buton = document.getElementById("button").innerHTML;
buton.onclick=function(event){
    if(!event.target.match('.btn')){
        var drpDn = document.getElementsByClassName("block");
        for (var i=0;i<drpDn.length;i++){
            var openDropdown = drpDn[i];
            if(openDropdown.classList.contains('show')){
                openDropdown.classList.remove('show');
            }
        }
    }
}