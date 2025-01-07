nom="John";
prenom="Doe";
age=30;
note=15;
const pi=3.14;
const etudianObjet1={
   nom:'nom1', prenom: 'prenom1', age:21
}
const etudianObjet2={
   nom:'nom2', prenom: 'prenom2', age:22

}
const etudianObjet3={
   nom:'nom33', prenom: 'prenom3', age:23

}
const etudianObjet={
   nom: 'John', 
   prenom: 'DOE',
   age:30,
}



const etudiantsTab = ["etu1", "etu2", "etu3"];
var tab=new Array();
 tab[0]=etudianObjet1
 tab[1]=etudianObjet2
 tab[2]=etudianObjet3

function exo1(){
   console.log("John");
}
function exo2(){
    console.log("Doe");
 }
 function exo3(){
    console.log("30");
 }
 function exo4(){
    console.log("15");
 }
 function exo5(){
    console.log("3.14");
 }
 function exo6(){
    console.log( "John Doe" );
 }

 function Tableauetu(){
  for(let i=0; i<etudiantsTab.length ; i++){
   console.log(etudiantsTab[i]);
}
 }
 function afficherObjet(){
      console.log(etudianObjet);
}
function afficherTableauObjets(){
   for(let i=0; i<tab.length ; i++){
      console.log(tab[i]);
   }
}

