<?php
require_once "Controller.php";

class UsersCont extends Controller{

	public function __construct(){
		$this->UserModel = $this->model('Users');
	}

	public function searchOneUser($name,$pw){
		return $this->UserModel::getUser($name,$pw);
	}

	public function login($user="",$pw=""){
		$data = ['title'=>'login','error'=>''];
		
		if (! empty($user) && ! empty($pw)) {
		    $username = $user;
		    $password = $pw;

		    $result = self::searchOneUser($user,$pw);

		    if(!empty($result)){
		        $_SESSION['Id_User'] = $result['Id_User'];
		        $_SESSION['Name_User'] = $result['Name_User'];
		        $_SESSION['userlevel'] = $result['Role'];
		        header("Location: ../");
		    } else {
		        $data['error']="AUTH ERROR";
		    }
    	}
    	$this->view('pages/login',$data);
    }
}