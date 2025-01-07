const etu1 ={
    matricule:1000,nom:'JOHN', prenom: 'DOE',note:14,assiduité:5

};
const etu2 ={
    matricule:2000,nom:'BOB', prenom: 'CARTLON',note:7,assiduité:1

};

const etu3 ={
    matricule:3000, nom:'RAYANE', prenom: 'SMITH',note:13,assiduité:3
};
var tab=new Array();
 tab[0]=etu1
 tab[1]=etu2
 tab[2]=etu3
var a;
 function estAdmissible(note){  
       if(note>=10){ 
        a=true   
      }else{
        a=false
      }
     return a;
 }

 function deliberation(){
    for(let i=0; i<tab.length ; i++){
        a= estAdmissible(tab[i].note + tab[i].assiduité);
        if(a== true){
            console.log(tab[i].matricule+": ADMIS");
        }else{
            console.log(tab[i].matricule+": AJOURNE");
        }
    }
 }


