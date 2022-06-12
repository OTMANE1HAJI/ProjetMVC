<?php 
	if(isset($_POST['submit'])){
		$createUser = new UsersController();
		$createUser->register();
	}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background: -webkit-linear-gradient(bottom, #229bbc, #8ad1e3);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#card {
  background: #fbfbfb;
  border-radius: 20px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 510px;
  margin: 6rem auto 8.1rem auto;
  width: 429px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}

#submit-btn {
  background: -webkit-linear-gradient(right, #229bbc, #8ad1e3);
  border: none;
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
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
#cnx {
  color: #229bbc;
  font-family: "Raleway", sans-serif;
  font-size: 13pt;
  margin-top: 10px;
  text-align: center;
}
.form-border {
  background: -webkit-linear-gradient(right, #229bbc, #8ad1e3);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #229bbc, #8ad1e3);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
</style>
</head>
<body>
<div class="container">

			<?php include('./views/includes/alerts.php');?>
			<div id="card">
            <div id="card-content">
            <div id="card-title">
            <h2>SIGNUP</h2>
</br>
            <div class="underline-title"></div>
            </div>
      <form method="post" class="form">
        <label for="username" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="username" class="form-content" type="text" name="username">
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;password
          </label>
        <input id="password" class="form-content" type="password">
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit">
		</br>
				<div class="card-footer">
					<a href="<?php echo BASE_URL;?>login" id="cnx">Connexion</a>
				</div>
				
	 </form>
    </div>
  </div>
			</div>
		</div>
	</div>
</div>