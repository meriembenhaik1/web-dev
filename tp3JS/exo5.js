const film1={
    titre:'f1', 
    annee:2024, 
    producteur:'meriem benhaik',
}
const film2={
    titre:'f2', 
    annee:2025, 
    producteur:'karim benahik',
}
const film3={
    titre:'f3', 
    annee:2026, 
    producteur:'ines benhaik',
}

var tab=new Array();
tab[0]=film1;
tab[1]=film2;
tab[2]=film3;

function ajouterunfilm(){
const a=document.getElementById('titre').value;
const b=Number(document.getElementById('annee').value);
const c=document.getElementById('producteur').value;
tab.push({ titre: a, annee: b, producteur: c });}



function supprimer(){
    if (tab.length > 0) {
                tab.shift(); // Supprimer le premier élément du tableau
            }
            afficahge();   
 } 



function afficahge() {
    for(let i=0; i<tab.length; i++){
        console.log( "("+tab[i].titre+","+tab[i].annee+","+tab[i].producteur+")" );
    }   
}
