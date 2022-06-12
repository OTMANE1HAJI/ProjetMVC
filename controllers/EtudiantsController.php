<?php 

class EtudiantsController{

	public function getAllEtudiants(){
		$etudiants = Etudiant::getAll();
		return $etudiants;
	}

	public function getOneEtudiant(){
		if(isset($_POST['ID_eleve'])){
			$data = array(
				'ID_eleve' => $_POST['ID_eleve']
			);
			$etudiant = Etudiant::getEtudiant($data);
			return $etudiant;
		}
	}
	public function findEtudiants(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$etudiants = Etudiant::searchEtudiant($data);
		return $etudiants;
	} 

	public function addEtudiant(){
		if(isset($_POST['submit'])){
			$data = array(
				'CNE' => $_POST['CNE'],
				'Nom' => $_POST['Nom'],
				'Prenom' => $_POST['Prenom'],
				'Adresse' => $_POST['Adresse'],
				'Ville' => $_POST['Ville'],
				'email' => $_POST['email'],

			);
			$result = Etudiant::add($data);  // cette fonction o l'ajoute au model pour tester la base donne
			if($result === 'ok'){
				Session::set('success','Etudiant Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updateEtudiant(){
		if(isset($_POST['submit'])){
			$data = array(
				'ID_eleve' => $_POST['ID_eleve'],
				'CNE' => $_POST['CNE'],
				'Nom' => $_POST['Nom'],
				'Prenom' => $_POST['Prenom'],
				'Adresse' => $_POST['Adresse'],
				'Ville' => $_POST['Ville'],
				'email' => $_POST['email'],

			);
			$result = Etudiant::update($data);
			if($result === 'ok'){
				Session::set('success','Etudiant Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deleteEtudiant(){
		if(isset($_POST['ID_eleve'])){
			$data['ID_eleve'] = $_POST['ID_eleve'];
			$result = Etudiant::delete($data);
			if($result === 'ok'){
				Session::set('success','Etudiant Supprimé');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}



?>