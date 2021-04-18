<?php
include_once("DB.php");

class Orders extends DB{
	
	public static function getOrders($type,$joints,$extrainfo){
		$pdo = self::connect();
		$orders = $type."_orders";
		$stmt = $pdo->prepare('SELECT o.* '.$extrainfo.' FROM '.$orders.' AS o '.$joints);
		$stmt->execute();
		$orders = $stmt->fetchAll();
		self::close($pdo);
		return $orders;
	}

	public static function getProduct($type){
		$pdo = self::connect();
		$stmt = $pdo->prepare('SELECT * FROM '.$type);
		$stmt->execute();
		$product = $stmt->fetchAll();
		self::close($pdo);
		return $product;
	}
}

