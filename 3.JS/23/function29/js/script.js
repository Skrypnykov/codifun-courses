var learner={
    firstName:"Hanna",
    lastName:"Skrypnykova",
    birth_year:1998,
    is_learner:true,
};
var is_learner=(learner.is_learner==true)?" is learner":" is not a learner";
var info = learner.firstName+" "+learner.lastName+is_learner;
document.getElementById("info").innerHTML=info;