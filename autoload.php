<?php 

 //le role de autoloading :si ona plusieurs classes et on veut appler ses classes . a la place de faire require a chaque classes o utilise une fonction s'appele spl_autoload_register qui l'appel de tous les classes 


session_start();

require_once './bootstrap.php';

spl_autoload_register('autoload');

function autoload($class_name){
	$array_paths = array(
		'database/',
		'app/classes/',
		'models/',
		'controllers/'
	);

	$parts = explode('\\',$class_name);  // on sait que dans php on recupere les dossier par '\' c'est pour ca on veut changer '/' par '\'
	$name = array_pop($parts);

	foreach($array_paths as $path){
		$file = sprintf($path.'%s.php',$name);
		if(is_file($file)){
			include_once $file;
		}
	}

}
