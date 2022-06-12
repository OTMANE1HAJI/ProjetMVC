<?php 
	if(isset($_POST['ID_eleve'])){
		$exitEtudiant = new EtudiantsController();
		$etudiant = $exitEtudiant->getOneEtudiant();
	}
	if(isset($_POST['submit'])){
		$exitEtudiant = new EtudiantsController();
		$exitEtudiant->updateEtudiant();
	}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>MODIFIER ETUDIANT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>

body {
	background: -webkit-linear-gradient(bottom, #229bbc, #8ad1e3);
	display: flex;
	justify-content: center;
	align-items: center;
	height: 200vh;
	flex-direction: column;
}
form {
	width: 500px;
	border: 5px solid #ccc;
	padding: 60px;
	background: #fff;
	border-radius: 15px;
	margin-top: 40px;
}
input {
	display: block;
	border: 2px solid #ccc;
	width: 85%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 15px;
}
label {
	color: #888;
	font-size: 15px;
	padding: 10px;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #065a74, #8ad1e3);
  border-radius: 21px;
  box-shadow: 0px 1px 8px #229bbc;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #8ad1e3;
}
button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}

    </style>
</head>
<body>
<div class="container">
   <div class="col-md-8 mx-auto">
            <div class="container">
          <a href="<?php echo BASE_URL ;?>">
		  <div>
		  <input id="submit-btn" type="submit" name="submit" value="HOME" />			      	
             </div>         </a>
         <form method="post" enctype="multipart/form-data">  
         <div><h2>ADD USER </h2></div>
		            <div class="container my-5">
							<label for="CNE">CNE*</label>
							<input type="text" name="CNE"  placeholder="Nom" value="<?php echo $etudiant->CNE; ?>" >
					</div>

		            <div class="container my-5">
							<label for="Nom">Nom*</label>
							<input type="text" name="Nom" placeholder="Nom" value="<?php echo $etudiant->Nom; ?>">
						</div>
						<div class="container my-5">
							<label for="Prenom">Prénom*</label>
							<input type="text" name="Prenom"  placeholder="Prénom" value="<?php echo $etudiant->Prenom; ?>">
						</div>

						<div class="container my-5">
							<label for="Adresse">Adresse*</label>
							<input type="text" name="Adresse"  placeholder="Adresse" value="<?php echo $etudiant->Adresse; ?>">
                        </div>

						<div class="container my-5">
							<label for="Ville">Ville*</label>
							<input type="text" name="Ville"  placeholder="Ville" value="<?php echo $etudiant->Ville; ?>">
							<input type="hidden" name="ID_eleve" value="<?php echo $etudiant->ID_eleve ; ?>" >  

						</div>

						<div class="container my-5">

							<label for="email">Email*</label>
							<input type="text" name="email"  placeholder="Email" value="<?php echo $etudiant->email; ?>">
						</div>
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>