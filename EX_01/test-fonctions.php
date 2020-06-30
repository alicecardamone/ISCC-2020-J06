<?php 
$nom_produit = "T-shirt femme";
$couleur = "Rouge";
$prix = 15.50;
$disponible = true;
$quantité = 10;

include("affichage.php");
include("gestion-produit.php");

afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantité = achat($quantité, 5);
$disponible = update_dispo($disponible);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantié = achat($quantité, 5);
$disponible = update_dispo($disponible);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantité = restockage ($quantité, 5);
$disponible = update_dispo($disponible);
afficher_produit($nom_produit, $couleur, $prix, $disponible);





