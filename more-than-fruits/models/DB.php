<?php

class DB {
	protected static function connect(){
		$pdo = new PDO ("mysql:host=localhost;dbname=morefruits;charset=utf8","root","");
		return $pdo;
	}

	protected static function close($pdo){
		$pdo = null;
	}
}
?>