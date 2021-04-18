<?php
include_once("DB.php");

class Users extends DB{

	public static function getUser($name,$pw){
		$pdo = self::connect(); 
		$stmt = $pdo->prepare('SELECT * FROM access WHERE Name_User = :name && PW_User = :pw');
		$stmt->execute(['name' => $name, 'pw' => $pw]);
		$return = $stmt->fetch();
		self::close($pdo);
		return $return;
	}

	public static function getUsers(){
		$pdo = self::connect();
		$stmt = $pdo->prepare('SELECT * FROM access');
		$stmt->execute();
		$return = $stmt->fetchAll();
		self::close($pdo);
		return $return;
	}
	
	public static function setUsers($name,$pw){
		$pdo = self::connect();
		$sql = "INSERT INTO access (Name_User,PW_User,Role) VALUES (:name,:pw,'user')";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['name'=>$name,'pw' => $pw]);
		self::close($pdo);
	}

	public static function delete($id){
		$pdo = self::connect();
		$sql = "DELETE FROM access WHERE Id_User = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['id'=>$id]);
		self::close($pdo);
	}


}