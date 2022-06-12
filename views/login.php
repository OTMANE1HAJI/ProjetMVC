<?php 
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<style>
	body {
  background: -webkit-linear-gradient(bottom, #229bbc, #8ad1e3);
  background-repeat: no-repeat;
}
#submit-btn {

	background: -webkit-linear-gradient(right, #15b7bd, #15b7bd);
	border: none;
	border-radius: 21px;
	box-shadow: 0px 1px 8px #15b7bd;
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
	box-shadow: 0px 1px 18px #15b7bd;
  }

  #signup {
  color: #15b7bd;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}

#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}

.underline-title {
  background: -webkit-linear-gradient(right, #10728b, #010609);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}

  </style> 
	<body>
<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div id="card">
               <div id="card-content">
			   <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
				</div>
			      	<form method="post" class="mr-1">
			      		<div class="form-group">
					  <label > * Username </label>		  
				      		<input type="text" name="username" placeholder="Username" class="form-control">
				      	</div>
</br> 
				      	<div class="form-group">
						  <label > * Password </label>		  

				      		<input type="password" name="password" placeholder="Password" class="form-control">
				      	<div>
						  <input id="submit-btn" type="submit" name="submit" value="LOGIN" />			      	
                        </div>
</br>
				<div class="card-footer">
					<a href="<?php echo BASE_URL;?>register" id="signup">Don't have an account yet ?</a>
				</div>
			</div>
		</div>
	</div>
</div>