var operationUser = new Operation("val1","val2","rez");

function Operation(val1Holder,val2Holder,rezHolder){
    this.val1Hldr=document.getElementById(val1Holder);
    this.val2Hldr=document.getElementById(val2Holder);
    this.rezHldr=document.getElementById(rezHolder);

    this.value1=0;
    this.value2=0;
    this.rez=0;

    this.initVars=function(){
        this.value1=parseFloat(this.val1Hldr.value);
        this.value2=parseFloat(this.val2Hldr.value);
    };
    this.displayRez=function(){
        this.rezHldr.value=this.rez;
    };
    this.validateNmbr=function(){
        var pattern = new RegExp("^[0-9]{0,5}[\.]?[0-9]{0,5}$");
        if(!(pattern.test(this.val1Hldr.value))){
            this.val1Hldr.value=this.val1Hldr.value.substr(0,this.val1Hldr.value.length-1);
        }
        if(!(pattern.test(this.val2Hldr.value))){
            this.val2Hldr.value=this.val2Hldr.value.substr(0,this.val2Hldr.value.length-1);
        }
    };
    this.getSumm=function(){
        this.initVars();
        this.rez=((""+this.val1Hldr.value=="")||(""+this.val2Hldr.value==""))?"insert numbers":this.value1+this.value2;
        this.displayRez();
    };
    this.getProd=function(){
        this.initVars();
        this.rez=((""+this.val1Hldr.value=="")||(""+this.val2Hldr.value==""))?"insert numbers":this.value1*this.value2;
        this.displayRez();
    };
    this.getDiff=function(){
        this.initVars();
        this.rez=((""+this.val1Hldr.value=="")||(""+this.val2Hldr.value==""))?"insert numbers":this.value1-this.value2;
        this.displayRez();
    };
    this.getDiv=function(){
        this.initVars();
        this.rez=((""+this.val1Hldr.value=="")||(""+this.val2Hldr.value==""))?"insert numbers":this.value1/this.value2;
        this.displayRez();
    };
    this.delValues = function(){
        this.val1Hldr.value="";
        this.val2Hldr.value="";
        this.rezHldr.value="";
    };
}