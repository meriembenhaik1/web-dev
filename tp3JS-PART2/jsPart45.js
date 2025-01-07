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
    }
    }

   

function donInsert(nom,prenom,points){
    lignes++  
    totalpoints=totalpoints+points
    doiInsertRowTable(lignes,nom,prenom,points)
   update_summary()
}
function update_summary(){
    document.getElementById("p1").innerText=lignes+ " ligne(s)"
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
row.setAttribute("class", "row"); 

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

function doNewData() {
    const elt_nom = document.getElementById("form_nom");
    const elt_prenom = document.getElementById("form_prenom");
    const elt_points = document.getElementById("form_points");

    const nom = elt_nom.value;
    const prenom = elt_prenom.value;
    const points = parseInt(elt_points.value);

    if(Number.isNaN(points) || elt_nom.value=="" ||  elt_prenom.value==""){
        window.alert("Formulaire incomplet !");
    }else{

    // Insertion de la nouvelle ligne
    donInsert(nom, prenom, points);

    // Ajout de la nouvelle entrée dans le tableau `persons`
    persons.push({ nom: nom, prenom: prenom, points: points });

    // Remet les champs du formulaire à vide
    elt_nom.value = "";
    elt_prenom.value = "";
    elt_points.value = "";
    }
}

function deleteRow() {
    if (lignes <= 0) {
        alert("Tableau déjà vide !");
    } else {
        const table = document.getElementsByTagName("table")[0];
        const chkbox_list = table.querySelectorAll(".col_chkbox input");
        
        // Vérifie si au moins une case est cochée
        let isOneChecked = false;
        for (let i = 0; i < chkbox_list.length; i++) {
            if (chkbox_list[i].checked) {
                isOneChecked = true;
                break;
            }
        }

        if (!isOneChecked) {
            alert("Sélectionnez au moins une ligne !");
        } else {
            if (confirm("Voulez-vous vraiment supprimer les lignes ?")) {
                const rows = table.getElementsByClassName("row");
                let i = 0;

                while (i < rows.length) {
                    if (rows[i].lastChild.firstChild.checked) {
                        // Soustrait les points de la ligne sélectionnée du total
                        totalpoints -= parseInt(rows[i].childNodes[3].innerText);

                        // Supprime l'entrée correspondante dans le tableau `persons`
                        persons.splice(i, 1);

                        // Supprime la ligne du tableau HTML
                        rows[i].remove();

                        lignes--; // Diminue le compteur de lignes
                    } else {
                        i++; // Passe à la ligne suivante
                    }
                }

                alert("Ligne(s) supprimée(s) avec succès !");
                update_summary(); // Met à jour le résumé
            }
        }
    }
}
