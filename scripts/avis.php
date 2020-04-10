<?php

$title='Votre avis';

$reception= filter_input (INPUT_POST, 'reception', FILTER_VALIDATE_INT);

$nom=filter_input(INPUT_POST,'nom', FILTER_SANITIZE_STRING);
$prenom=filter_input(INPUT_POST,'prenom', FILTER_SANITIZE_STRING);
$message=filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);
$avatar=filter_input(INPUT_POST,'avatar', FILTER_SANITIZE_STRING);
$content='';

if(($reception==1) AND ($nom=='' OR $prenom=='' OR $message=='')) {

	$content = "<div class='alert alert-warning m-5' role='alert'>
					<p class='text-center'>Veuillez compléter tous les champs du formulaire</p>
				</div>";
}

if($reception!=1 OR $nom=='' OR $prenom=='' OR $message=='') :

$content .= '
<div class="row">
	<div class="col-xl-3 col-md-1"></div>
	<div class="col-xl-6 col-md-10">
		<h1 class="text-center">Votre Avis</h1>
		<p class="text-center ml-5 mr-5 mt-5">Merci pour la confiance que vous nous témoignez en visitant le Photographe du dimanche ! Et maintenant, si vous partagiez votre expérience avec nous ? En laissant votre avis, vous contribuez à l\'amélioration de nos services tout en nous aidant à nous faire connaître ! Chez le Photographe du dimanche, la satisfaction est au coeur de nos préoccupations alors merci de nous aider au quotidien !</p>
	</div>
	<div class="col-xl-3 col-md-1"></div>
</div>
<div class="row mb-5">
	<div class="col-xl-4 col-md-1"></div>
	<div class="col-xl-4 col-md-10">
		<form action="index.php?page=3" method="POST">
			
			<input type="hidden" name="reception" value="1" />

			<div class="form-group">
				<label>Votre Prénom</label>
				<input class="form-control" type="text" name="prenom"/>
			</div>

			<div class="form-group">
				<label>Votre nom</label>
				<input class="form-control" type="text" name="nom"/>
			</div>

			<div class="form-group">
				<label>Votre avatar</label>
				<input class="form-control" type="text" name="avatar" placeholder="Entrez ici l\'url de votre image ou laissez vide"/>
			</div>

			<div class="form-group">
			<label>Votre Avis</label>
    		<textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
			</div>

			<input class="btn btn-primary" type="submit" name="envoi" value="Envoyer" />

		</form>
	</div>
	<div class="col-xl-4 col-md-1"></div>
</div>
';

else:
	$content ="<div class='p-5 send-message'><p class='text-center text-white p-5 bg-success'>Merci d'avoir pris le temps de donner votre avis !<p></div>";

	// Si la valeur de l'mage de l'avatar est nulle on met celle par défaut
	if($avatar == "") {
		$avatar = "images/user.png";
	}

	// Ouvrir une connexion 
	$maBDD = new mysql();

	//Ecrire une requête de type INSERT
	$requete = "INSERT INTO avis(nom, prenom, avatar, message) VALUES ('".$nom."', '".$prenom."','".$avatar."', '".$message."')";

	// Executer la requête d'insertion dans la BDD
	$maBDD->insertion($requete);

	header('location:4-tous-les-avis-photographie');

endif;