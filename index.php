<?php 
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';


$home = new HomeController();

$pages = ['home','add','update','delete','logout'];

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){


	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pages)){  // on cherche dans pages s'il existe une page s'appele('add','delete',...)// on cherche dans pages s'il existe une page s'appele('add','delete',...)
			$page = $_GET['page'];//si oui la fonction index va afficher la page
			$home->index($page);
		}else{
			include('views/includes/404.php'); // si la page n'existe pas on affiche une page d'erreur
		}
	}else{
		$home->index('home');  // si on ecrit rien sur URL o va a la page home
	}


 require_once './views/includes/footer.php';
 
}else if(isset($_GET['page']) && $_GET['page'] === 'register'){
	$home->index('register');
}else{
	$home->index('login');
}

?>