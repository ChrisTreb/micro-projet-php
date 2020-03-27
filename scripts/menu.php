<?php

$tab=array('1'=>'Accueil','2'=>'Ma sélection','3'=>'Donnez votre avis','4'=>'Lire les avis');

$urls=array('1'=>'la-photographie-les-photographes','2'=>'selection-photographies','3'=>'photographies-votre-avis','4'=>'tous-les-avis-photographie');

/*
// MENU BOOTSTRAP

$menu='
<a class="navbar-brand" href="1-la-photographie-les-photographes"><i class="fa fa-camera"></i> LPDD</a>
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
*/

// MENU #DIY #ALAMANO :)

$menu='
<div class="menu-logo">
	<a class="logo-site" href="1-la-photographie-les-photographes"><i class="fa fa-camera"></i> LPDD</a>
	<button id="bouton-menu" class="btn" type="button">
		<i class="fa fa-bars"></i>
	</button>
</div>

<div class="menu-liste-container">
  <ul class="menu-liste">';

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
$menu.="<li class='menu-item  " .$classe. "' ><a href='".$key."-". $urls[$key] ."'>" .$value. "</a></li>";

endforeach ;

$menu.='
	</ul>
</div>';
