<?php 
	if(isset($_POST['ID_eleve'])){
		$exitEtudiant = new EtudiantsController();
		$exitEtudiant->deleteEtudiant();
	}
?>