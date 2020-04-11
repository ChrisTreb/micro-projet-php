<?php

// Ouvrir une connexion 
$maBDD = new mysql();

//Ecrire une requête de type SELECT
$requete = "SELECT * FROM avis";

// Executer la requête
$tableau = $maBDD->cherche($requete);

// Suppression d'un avis
if(isset($_POST['delete'])) {
  $delete = $_POST['delete'];
  $sql = "DELETE FROM avis where id = '$delete'";
  $maBDD->insertion($sql);
  header('location:4-tous-les-avis-photographie');
}

$title="Administration";

$content = "
<div class='row'>
    <div class='col-md-12'>
        <h1>". $title ."</h1>
    </div>
</div>
<div class='row'>
    <div class='col-md-12'>
        <form action='index.php?page=5' method='POST'>
            <ul class='list-group m-5'>
                <li class='list-group-item active'>Liste des avis</li>
";

// Boucle d'affichage des données en BDD

foreach($tableau AS $element) {

    $content .="
        <li class='list-group-item'>
            <div class='avatar m-3' style='background-image:url(". $element['avatar'] .");float:left;'></div>
            <h5>". $element['prenom']. " " . $element['nom'] ."</h5>
            <p class='date-post'>Posté le : ". $element['date']. "</p>
            <p>". $element['message'] ."</p>
            <div class='p-3' style='float:right;'>
                <button class='btn btn-danger ml-2' type='submit' name='delete' value='".$element['id']."'>Supprimer</button>
            <div>
        </li>
    ";
}

$content .= "</ul></form></div></div>";
