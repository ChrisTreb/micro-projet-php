<?php

$title="Ma sélection";

$nom=array('Theo gosselin','Michel Hirsch','Rapahel Kriegel','Erwan Kéméré','Dominique Mayer');

$photo=array('theo-gosselin.jpg','michel-hirsch.jpg','raphaele-kriegel.jpg','erwan-quemere.jpg','dominique-mayer.jpg');

$bio=array(
	"Né au Havre en 1990, Théo Gosselin a grandi au bord de la mer et de la nature. Il a débuté en photographie en 2007. Eternel voyageur, il a photographié à travers l'Europe et les Etats-Unis ce qu'il aime : la vérité des grans espaces et les personnes rencontrées en cours du chemin.",
	"Le travail photographique de Michel Hirsch est avant tout le fruit de passions. Sa formation, à l’Ecole de l’Image des Gobelins à Paris sera la clé pour le développement d’un nouveau regard sur ce monde, point de départ d’une collection d'œuvres photographiques uniques et singulières.",
	"Raphaële Kriegel est photographe auteure affiliée à l'Agessa, élève de l'École de l'Image des Gobelins promo 1989, membre associée de l'ADAGP. Elle reproduit fidèlement les tableaux, sculptures, dessins, aquarelles, livres anciens, encadrés et sous verre, tous formats. ",
	"Erwan Quéméré, auteur photographe de 40 ans, réside dans le Golfe du Morbihan. Plutôt orienté vers la nature et aimant prendre le temps, il est particulièrement attiré par les poses longues pour les aspects contemplatif et manuel de la prise de vue sur le terrain. ",
	"Dominique Mayer fit ses premières armes photographiques en 1977. Passionné d’astronomie, il entreprit en 1981 de fixer un appareil photo sur un télescope pour pratiquer l’astrophotographie. Encouragé par ses résultats de laboratoires, il décida à partir de 1982 de pointer son appareil vers le reste du vaste monde."
);

$content='
<div class="row">
	<div class="col-md-12">
		<h1 class="text-center">Ma sélection</h1>
	</div>
</div>
<div class="row ma-selection">
';

foreach ($nom as $key => $value) :
	$content.="
	<div class='col-lg-6 col-md-12'>
		<div class='card'>
		<img class='card-img-top' src='images/".$photo[$key]."' alt='image' data-toggle='modal' data-target='#modal-".$key."'>
			<div class='card-body'>
				<p class='nom-artiste'><i class='fa fa-camera-retro'></i> <b>".$value."</b> <i class='fa fa-caret-down'></i></p>
				<p class='card-text bio'>".$bio[$key]."</p>
			</div>
		</div>
	</div>

	<div class='modal fade' id='modal-".$key."' tabindex='-1' role='dialog'>
		<div class='modal-dialog modal-dialog-centered' role='document'>
			<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title'><i class='fa fa-camera-retro'></i> ".$value."</h5>
					<button type='button' class='close' data-dismiss='modal'>
					<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body'>
					<img class='img-fluid' src='images/".$photo[$key]."' alt='image'>
				</div>
			</div>
		</div>
	</div>
	";

endforeach;

$content.='</div>';
