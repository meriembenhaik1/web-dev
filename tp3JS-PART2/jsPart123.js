const persons = [
    {
        nom: "nom-1",
        prenom: "prenom-1",
        points: 5
    },
    {
        nom: "nom-2",
        prenom: "prenom-2",
        points: 10
    },
    {
        nom: "nom-3",
        prenom: "prenom-3",
        points: 15
    }
];
lignes=0
totalpoints=0
function init(){
    for (const element of persons) {
        donInsert(element.nom,element.prenom,element.points)
        lignes++    
    }
   
    }

function donInsert(nom,prenom,points){
    totalpoints=totalpoints+points
    doiInsertRowTable(lignes+1,nom,prenom,points)
   // update_summary()

}
function update_summary(){
    document.getElementById("p1").innerText=lignes+1 + " ligne(s)"
    document.getElementById("p3").innerText= "Total point(s)=" +totalpoints
}
function consoleTableau(){
    for (const element of persons) {
        console.log(element);
        lignes++
    }
}

function doiInsertRowTable(num,nom,prenom,points){
const table =document.getElementById("table");
row = document.createElement("tr");
//row.setAttribute("class", "row"); pourquoi ?

col1=document.createElement("td");
col2=document.createElement("td");
col3=document.createElement("td");
col4=document.createElement("td");
col5=document.createElement("td");

col1.setAttribute("class","col_number")
col2.setAttribute("class","col_text")
col3.setAttribute("class","col_text")
col4.setAttribute("class","col_number")
col5.setAttribute("class","col_chkbox")
 

col1.innerText=num;
col2.innerText=nom;
col3.innerText=prenom;
col4.innerText=points;


checkbox = document.createElement("input");
checkbox.setAttribute("type", "checkbox"); // Type "checkbox"
col5.append(checkbox); 

row.append(col1);
row.append(col2);
row.append(col3);
row.append(col4);
row.append(col5);
table.append(row);
}
