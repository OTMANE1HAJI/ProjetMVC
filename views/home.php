<?php 
	if(isset($_POST['find'])){
		$data = new EtudiantsController();
		$etudiants = $data->findEtudiants();
	}else{ 	
		$data = new EtudiantsController();
		$etudiants = $data->getAllEtudiants();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <mata name="viewport" content="width=device-width,intial-scale=1.0">
    <title>Liste Etudiants</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body > 
<div class="container">
          <a href="<?php echo BASE_URL ;?>add">
          <button class="btn btn-primary my-5">  Add etudiants </button>
         </a> 
         <a href="<?php echo BASE_URL;?>logout" >
         <button class="btn btn-danger"> Logout </button>
	      </a>
        <table class="table">
        <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adress</th>
      <th scope="col">Ville</th>
      <th scope="col">Email</th>
    
  </tr>
  </thead>
		<tbody>
	    <?php foreach($etudiants as $etudiant):?>
			<th scope="row"><?php echo $etudiant['CNE'] ;?></td>
                <td><?php echo $etudiant['Nom'] ;?></td>
                <td><?php echo $etudiant['Prenom'];?></td>
		        <td><?php echo $etudiant['Adresse']; ?></td>
                <td><?php echo $etudiant['Ville'] ;?></td>
                <td><?php echo $etudiant['email'] ; ?></td>

    
    <td>
    <form method="post" action="delete">
       <input type="hidden" name="ID_eleve" value="<?php echo $etudiant['ID_eleve'] ; ?>" > 
       <button class="btn btn-danger">DELETE</button>
   </form></td>
   <td>
       <form method="post" action="update">
       <input type="hidden" name="ID_eleve" value="<?php echo $etudiant['ID_eleve'] ; ?>" >  
       <button class="btn btn-danger">Edit</button>
</form>
</td>
</tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>