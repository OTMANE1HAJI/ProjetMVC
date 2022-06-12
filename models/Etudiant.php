<?php 

class Etudiant {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM eleves');
		$stmt->execute();
		return $stmt->fetchAll();   // recuperer tous les etudiants  
		$stmt->close();
		$stmt = null;  //pour eviter que la cnx rest ouvert avec la base donnes
	}

	static public function getEtudiant($data){
		$id = $data['ID_eleve'];
		try{
			$query = 'SELECT * FROM eleves WHERE ID_eleve=:ID_eleve';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":ID_eleve" => $id));
			$etudiant = $stmt->fetch(PDO::FETCH_OBJ);
			return $etudiant;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO eleves (CNE,Nom,Prenom,Adresse,Ville,email)
			VALUES (:CNE,:Nom,:Prenom,:Adresse,:Ville,:email)');
		$stmt->bindParam(':CNE',$data['CNE']);   //liees les valeurs entrees par l'utilisateur avec les parametres de BDD
		$stmt->bindParam(':Nom',$data['Nom']);
		$stmt->bindParam(':Prenom',$data['Prenom']);
		$stmt->bindParam(':Adresse',$data['Adresse']);
		$stmt->bindParam(':Ville',$data['Ville']);
		$stmt->bindParam(':email',$data['email']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE eleves SET CNE=:CNE , Nom=:Nom, Prenom= :Prenom ,Adresse= :Adresse  , Ville= :Ville, email=:email WHERE ID_eleve= :ID_eleve');
		$stmt->bindParam(':ID_eleve',$data['ID_eleve']);
		$stmt->bindParam(':CNE',$data['CNE']);
		$stmt->bindParam(':Nom',$data['Nom']);
		$stmt->bindParam(':Prenom',$data['Prenom']);
		$stmt->bindParam(':Adresse',$data['Adresse']);
		$stmt->bindParam(':Ville',$data['Ville']);
		$stmt->bindParam(':email',$data['email']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function delete($data){
		$id = $data['ID_eleve'];
		try{
			$query = 'DELETE FROM eleves WHERE ID_eleve=:ID_eleve';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":ID_eleve" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function searchEtudiant($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM eleves WHERE Nom LIKE ? OR Prenom LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$employes = $stmt->fetchAll();
			return $etudiants;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
}
