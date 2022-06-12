<?php 
	if(isset($_POST['submit'])){
		$newEtudiant = new EtudiantsController();
		$newEtudiant->addEtudiant();
	}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>ADD NEW USERS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>

body {
  background: -webkit-linear-gradient(bottom, #229bbc, #8ad1e3);
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
border: none;
color: white;
height: 44.3px;
width: 143px;

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
          <a href="<?php echo BASE_URL ;?>" >
      	<div>
						  <input id="submit-btn" type="submit" name="submit" value="HOME" />			      	
                        </div>
      </a>
         <form method="post" enctype="multipart/form-data">  
         <div><h2>ADD USER </h2></div>

 <div class="container my-5">     
      <label class="form-label">CNE*</label>
      <input type="text" placeholder="CNE" name="CNE">
 </div>

 <div class="container my-5">
      <label class="form-label">Nom*</label>
      <input type="text" placeholder="Nom" name="Nom">
</div>

 <div class="container my-5">
      <label class="form-label">Prenom*</label>
      <input type="text" placeholder="Prenom" name="Prenom">
</div>

<div class="container my-5">
      <label class="form-label">Adresse*</label>
      <input type="text" placeholder="Adresse" name="Adresse">
</div>


<div class="container my-5">
      <label class="form-label">Ville*</label>
      <input type="text" placeholder="Ville" name="Ville">
</div>


<div class="container my-5">
      <label class="form-label">Email*</label>
      <input type="text" placeholder="Email" name="email">
</div>


   <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
   </div>
</form>
</div>
</div>