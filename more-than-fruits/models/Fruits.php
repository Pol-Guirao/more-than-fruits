<?php
include_once("Orders.php");

class Fruits extends Orders{
	
	public static function getFruits(){
		return self::getProduct("fruits");
	}

	public static function getFruitOrders(){
		return self::getOrders("fruit","INNER JOIN fruits as f ON o.Fruit = f.Id_Fruit",",f.Name_Fruit");
	}

	public static function checkFruitOrders($search){
		$pdo = self::connect();
		$sql = "SELECT orders.*,f.Name_Fruit FROM fruit_orders as orders INNER JOIN fruits as f ON orders.Fruit = f.Id_Fruit WHERE orders.Date_Order LIKE '%$search%' OR orders.Provider LIKE '%$search%' OR orders.Country LIKE '%$search%' OR orders.Provider LIKE '%$search%' OR orders.Phone LIKE '%$search%' OR orders.Provider_Id LIKE '%$search%' OR f.Name_Fruit LIKE '%$search%' OR orders.Kilograms LIKE '%$search%'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$return = $stmt->fetchAll();
		self::close($pdo);
		return $return;
	}

	public static function insertFruitOrders($search){
		$pdo = self::connect();
		$sql = "SELECT orders.*,f.Name_Fruit FROM fruit_orders as orders INNER JOIN fruits as f ON orders.Fruit = f.Id_Fruit WHERE orders.Date_Order LIKE '%$search%' OR orders.Provider LIKE '%$search%' OR orders.Country LIKE '%$search%' OR orders.Provider LIKE '%$search%' OR orders.Phone LIKE '%$search%' OR orders.Provider_Id LIKE '%$search%' OR f.Name_Fruit LIKE '%$search%' OR orders.Kilograms LIKE '%$search%'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$return = $stmt->fetchAll();
		self::close($pdo);
		return $return;
	}

	public static function createOrderFruits($provider,$country,$phone,$cif,$fruit,$kg){
		$pdo = self::connect();
		$sql = "INSERT INTO fruit_orders (Date_Order,Provider,Country,Phone,Provider_Id,Fruit,Kilograms) VALUES (:data,:provider,:country,:phone,:cif,:fruit,:kg)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['data'=>date('Y-m-d'),'provider' => $provider, 'country' => $country, 'phone' => $phone, 'cif' => $cif, 'fruit' => $fruit, 'kg' => $kg]);
		self::close($pdo);
	}
}