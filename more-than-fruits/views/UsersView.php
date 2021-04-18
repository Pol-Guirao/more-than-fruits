<?php

class UsersView {
	public function tableUsers($users){
		$html="";
		foreach($users as $users){
			$html.="<tr>";
			$html.="<td>".$users['Name_User']."</td>";
			$html.="<td>".$users['Role']."</td>";
			if($users['Id_User']>1){
				$html.="<td><button class='deleteUser' id=".$users['Id_User'].">DELETE</td>";
			}
			$html.="</tr>";
		}
		return $html;
	}
}