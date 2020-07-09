var learner={
    firstName:"Hanna",
    lastName:"Skrypnykova",
    birth_year:1998,
    is_learner:true,
    getFullName:function(){
        return this.firstName+" "+this.lastName;
    },
    isLearner:function(){
        return(this.is_learner==true)?" is learner":" is not a learner";
    }
};
document.getElementById("info").innerHTML=learner.getFullName()+learner.isLearner();