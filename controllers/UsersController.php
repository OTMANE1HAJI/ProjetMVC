<?php 

class UsersController {

	public function auth(){
		if(isset($_POST['submit'])){
			$data['username'] = $_POST['username'];
			$result = User::login($data);
			if($result->username === $_POST['username'] && password_verify($_POST['passwd'],$result->passwd)){
				$_SESSION['logged'] = true ;

				$_SESSION['username'] = $result->username;
				
				Redirect::to('home');
				}
			else{
				Session::set('error','Username or password Invalide');
				Redirect::to('login');
			}
		}
	}

	public function register(){
		if(isset($_POST['submit'])){
			$options = [
				'cost' => 12
			];
			$passwd = password_hash($_POST['passwd'],PASSWORD_BCRYPT,$options);
						$data = array(
				'username' => $_POST['username'],
				'passwd' => $passwd,
			);
			$result = User::createUser($data);
			if($result === 'ok'){
				Session::set('success','Compte crée');
				Redirect::to('login');
			}else{
				echo $result;
			}
		}
	}

	static public function logout(){
		session_destroy();
	}


}