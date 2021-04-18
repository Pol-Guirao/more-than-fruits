
<?php
	session_start();
	require_once "controllers/UsersCont.php";
	require_once "controllers/FruitsCont.php";
	require_once "controllers/AdminCont.php";
	$user = new UsersCont();
   	if(isset($_SESSION['Id_User'])){
   		if($_SESSION['userlevel']=="admin"){
   			$fruits = new AdminCont();
   			$fruits->adminData();
   		}else{
   			$fruits = new FruitsCont();
   			$search = isset($_POST['search'])?$_POST['search']:'';
   			$fruits->orderTable($search);
   		}
   	}else{
   		if(isset($_POST['user']) && isset($_POST['pw'])){
   			$user->login($_POST['user'],$_POST['pw']);
   		}else{
   			$user->login();
   		}
   	}
?>



	