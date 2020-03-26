<?php

// Ouvrir une connexion 
$maBDD = new mysql();

//Ecrire une requête de type SELECT
$requete = "SELECT * FROM avis";

// Executer la requête
$tableau = $maBDD->cherche($requete);

$title="Lire les avis";

$content = "
<div class='row'>
    <div class='col-md-12'>
        <h1>". $title ."</h1>
    </div>
</div>
<div class='row users-posts'>
";

// Boucle d'affichage des données en BDD

foreach($tableau AS $element) {

    $content .="
    <div class='col-xl-3 col-lg-4 col-md-6 col-xs-12'>
        <div class='card'>
            <div class='avatar' style='background-image:url(". $element['avatar'] .");'></div>
            <div class='card-body'>
                <h5 class='card-title'>". $element['prenom']. " " . $element['nom'] ."</h5>
                <hr>
                <p class='date-post'>Posté le : ". $element['date']. "</p>
                <p class='card-text'>". $element['message'] ."</p>
            </div>
        </div>
    </div>
    ";
}

$content .= "</div>";