<?php

$tab=array('1'=>'Accueil','2'=>'Ma sélection','3'=>'Donnez votre avis','4'=>'Lire les avis');

$urls=array('1'=>'la-photographie-les-photographes','2'=>'selection-photographies','3'=>'photographies-votre-avis','4'=>'tous-les-avis-photographie');

$menu='
<a class="navbar-brand" href="index.php?page=1"><i class="fa fa-camera"></i> LPDD</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">';

foreach ($tab AS $key => $value) :
	//on teste si on est sur la page active
	if($key==$page):
		//si c'est le cas on valorise la variable classe 
		$classe="active";
	else:
		//sinon on pense a reinitialiser la variable classe
		$classe='';
	endif;

// $menu.="<li class='nav-item' ><a class=class='nav-link' '".$classe."' href='index.php?page=".$key."'>".$value."</a></li>";
$menu.="<li class='nav-item  " .$classe. "' ><a class='nav-link' href='".$key."-". $urls[$key] ."'>" .$value. "</a></li>";

endforeach ;

$menu.='
	</ul>
</div>';
