var contor=0,mesaj="";
function contorClick(){
    contor++;
    if(contor==1)
        {mesaj=`Этого недостаточно... Вы нажали только один раз`}
    else if(contor>=2&&contor<=10)
        {mesaj=`Вы нажали `+contor+` раз... Можно больше!`}
    else
        {mesaj=`Браво! Вы были настойчивы, чтобы нажать `+contor+` раз.`}
    document.getElementById(`rez`).innerHTML=mesaj;
}
