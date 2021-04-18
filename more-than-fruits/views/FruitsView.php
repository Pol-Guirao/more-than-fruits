<?php

class FruitsView {

	public function showFruits($orders){
		$html="";
		foreach($orders as $order){
			$html.="<tr>";
			$html.="<td>".$order['Date_Order']."</td>";
			$html.="<td>".$order['Provider']."</td>";
			$html.="<td>".$order['Country']."</td>";
			$html.="<td>".$order['Phone']."</td>";
			$html.="<td>".$order['Provider_Id']."</td>";
			$html.="<td>".$order['Name_Fruit']."</td>";
			$html.="<td>".$order['Kilograms']."</td>";
			$html.="</tr>";
		}
		return $html;
	}

	public function selectFruit($fruits){
		$html="";
		foreach($fruits as $fruit){
			$html.="<option value='".$fruit['Id_Fruit']."'>".$fruit['Name_Fruit']."</option >";
		}
		return $html;
	}
}