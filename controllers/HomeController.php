<?php 


class HomeController{

	public function index($page){  //la fonction index affiche les page 
		include('views/'.$page.'.php');   // ona utiliser le variable page pour eviter la repittiion d'appel des fonction(add,update,delete)
	}

}

?>