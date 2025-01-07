let produitsTab = [];  // Tableau pour stocker les produits ajoutés au panier
let total = 0;
ligne=0;         

// Fonction pour ajouter un produit au panier
function recuperer(event) {
    let card = event.target.closest('.card'); // Trouver l'élément parent '.card' du bouton
    let nomProduit = card.querySelector('#nom').innerText; // Récupérer le nom du produit
    let prixProduit = parseInt(card.querySelector('.price').innerText.replace(/\D/g, ''));
    let qte=1; // Extraire le prix et le convertir en nombre

    let produitExistant = false; // Marqueur pour savoir si le produit est déjà dans le panier

    // Vérifier si le produit existe déjà dans le tableau
    for (const element of produitsTab) {
        if (element.nom === nomProduit) {
            alert("Le produit existe déja vous etes sur que vous voulez ajouter encore ?");
           
            // Si le produit existe déjà, on incrémente la quantité
            element.qte =element.qte+1;
            produitExistant = true;

            const rows = document.querySelectorAll('#table .row');
            
            rows.forEach(row => {
                if (row.querySelector('.col_number').innerText === nomProduit) {
                    row.querySelector('.col_text:nth-child(3)').innerText = element.qte; // Mise à jour de la quantité
                    row.querySelector('.col_number:nth-child(4)').innerText = element.qte * prixProduit; // Mise à jour du total
                }
            });
            break; // Sortir de la boucle une fois qu'on a trouvé le produit
        }
    }

    // Si le produit n'existe pas encore, on l'ajoute avec une quantité initiale de 1
    if (!produitExistant) {
        window.alert("Produit ajouté au panier");
        produitsTab.push({ nom: nomProduit, prix: prixProduit, qte:1});
        doiInsertRowTable(nomProduit,prixProduit,qte);
        ligne++;
    }
    for (const element of produitsTab) {
        total=element.prix*element.qte+total;
    }
    document.getElementById("p3").innerText= "Totale prix=" +total+ "DZD"
}

// Fonction pour insérer une ligne dans le tableau
function doiInsertRowTable(nom, prix,qte) {
    const table =document.getElementById("table");
    row = document.createElement("tr");
    row.setAttribute("class", "row"); 
    
    col1=document.createElement("td");
    col2=document.createElement("td");
    col3=document.createElement("td");
    col4=document.createElement("td");
    col5=document.createElement("td");
    col6=document.createElement("td");
    
    col1.setAttribute("class","col_number")
    col2.setAttribute("class","col_text")
    col3.setAttribute("class","col_text")
    col4.setAttribute("class","col_number")
    col5.setAttribute("class","col_chkbox")
    col6.setAttribute("class","col_chkbox")
     
    
    col1.innerText=nom;
    col2.innerText=prix;
    col3.innerText=qte;
    col4.innerText=prix*qte;
    
    
    checkbox = document.createElement("input");
    checkbox.setAttribute("type", "checkbox"); // Type "checkbox"
    checkbox1 = document.createElement("input");
    checkbox1.setAttribute("type", "checkbox"); // Type "checkbox"
    /*col5.append(checkbox1); */
    col6.append(checkbox); 
    

    
    row.append(col1);
    row.append(col2);
    row.append(col3);
    row.append(col4);
   /* row.append(col5);*/
    row.append(col6);
    table.append(row);
}








function deleteRow() {
    if (ligne <= 0) {
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
            if (confirm("Voulez-vous vraiment supprimer le produit de votre achat ?")) {
                const rows = table.getElementsByClassName("row");
                let i = 0;

                while (i < rows.length) {
                    if (rows[i].lastChild.firstChild.checked) {
                        // Supprime l'entrée correspondante dans le tableau `produitsTab`
                        produitsTab.splice(i, 1);

                        // Supprime la ligne du tableau HTML
                        rows[i].remove();

                        ligne--; // Diminue le compteur de lignes
                    } else {
                        i++; // Passe à la ligne suivante
                    }
                }

                // Recalcule le total
                total = produitsTab.reduce((sum, produit) => sum + produit.prix * produit.qte, 0);

                // Met à jour l'affichage du total
                document.getElementById("p3").innerText = "Totale prix = " + total + " DZD";

                alert("Produit supprimé avec succès !");
            }
        }
    }
}
function confirmer (){
    confirm("Bssahtekkkk à la prochianeeee !")
}

document.getElementById('search-input').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const products = document.querySelectorAll('.card');
  
    products.forEach(product => {
      const productName = product.querySelector('#nom').textContent.toLowerCase();
      if (productName.includes(searchValue)) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });
  });
  
