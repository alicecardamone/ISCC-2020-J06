<?php

function update_dispo($quantité)
{
    if ($quantité >> 0) {
        return true;
    } else {
        return false;
    };
}

function restockage($quantité, $nb_ajout)
{
    echo "<p> $nb_ajout ont été ajoutés au stock</p>";
    return $quantité + $nb_ajout;
}

function achat($quantité, $nb_achat)
{
    echo "<p> $nb_achat produits ont été acheté</p>";
    return $quantité - $nb_achat;
}
