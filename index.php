<?php
//inclusion des classes essentiel !!
include 'include/include.php';
//reception de la variable page passée en get cette variable contient le numero de page demandée
$page= filter_input(INPUT_GET,'page',FILTER_VALIDATE_INT);
//afficher page 1 au lieu du zero par defaut lors de la première connexion sur le site 
if(!($page>0 AND $page<6)) :
	$page=1;
endif;

switch($page) {
	case('1'):
	include 'scripts/accueil.php';
	//création page 1
	break;
	case('2'):
	include 'scripts/selection.php';
	//création page 2
	break;
	case('3'):
	include 'scripts/avis.php';
	//création page 3
	break;
	case('4'):
	include 'scripts/listeAVis.php';
	//création page 4
	break;
	case('5'):
	include 'scripts/admin.php';
	//création page 5
	default: 
	//numero de page incorrect
}
//instanciation de la classe page,création de la nouvelle page
$mapage=new page();
//remplissage des 'trous'
//title
$mapage->remplace('title',$title);
//content
$mapage->remplace('content',$content);
//valorisation de la variable $menu et remplacement du "trou" menu
include 'scripts/menu.php';
$mapage->remplace('menu',$menu);
//valorisation de la variable $footer et remplacement du "trou" footer
include 'scripts/footer.php';
$mapage->remplace('footer',$footer);

//affichage de la page 
$mapage->affiche();
