<?php
require_once "Controller.php";

class AdminCont extends Controller{
	public function __construct(){
		$this->FruitsModel = $this->model('Fruits');
		$this->UserModel = $this->model('Users');
		$this->FruitsView = $this->viewObject('FruitsView');
		$this->UsersView = $this->viewObject('UsersView');
	}

	//Users
	public function createUser($name,$pw){
		$this->UserModel::setUsers($name,$pw);
	}
	public function deleteUser($id){
		$this->UserModel::delete($id);
	}
	public function returnUsers(){
		return $this->UserModel::getUsers();
	}
	public function showUsers($items){
		return $this->UsersView::tableUsers($items);
	}
	

	//Fruit Orders
	public function createOrder($provider,$country,$phone,$cif,$fruit,$kg){
		$this->FruitsModel::createOrderFruits($provider,$country,$phone,$cif,$fruit,$kg);
	}
	public function fruitOrders(){
		return $this->FruitsModel::getFruitOrders();
	}
	public function showTableFruits($items){
		return $this->FruitsView::showFruits($items);
	}

	//Fruit Types
	public function getTypesFruits(){
		return $this->FruitsModel::getFruits();
	}
	public function showFruitSelect($items){
		return $this->FruitsView::selectFruit($items);
	}

	public function adminData(){
		$data = ['title'=>'Orders'];
		$data['users'] = self::showUsers(self::returnUsers());
		$data['orders'] = self::showTableFruits(self::fruitOrders());
		$data['fruits'] = self::showFruitSelect(self::getTypesFruits());
		$this->view('pages/admin-data',$data);
	}
}