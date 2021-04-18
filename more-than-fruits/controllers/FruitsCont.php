<?php
require_once "Controller.php";

class FruitsCont extends Controller{

	public function __construct(){
		$this->FruitsModel = $this->model('Fruits');
		$this->FruitsView = $this->viewObject('FruitsView');
	}

	public function fruitOrders(){
		return $this->FruitsModel::getFruitOrders();
	}

	public function searchFruitOrders($search){
		return $this->FruitsModel::checkFruitOrders($search);
	}

	public function showTableFruits($items){
		return $this->FruitsView::showFruits($items);
	}

	public function orderTable($search){
		$data = ['title'=>'Orders','search'=>$search];
		if($search!=""){
			$data['orders'] = self::showTableFruits(self::searchFruitOrders($search));
		}else{
			$data['orders'] = self::showTableFruits(self::fruitOrders());
		}
		$this->view('pages/order-table',$data);
    }
}