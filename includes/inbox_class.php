<?php

class contact_inbox{

	public function get_inbox(){
		global $database;

		$sql = "SELECT * FROM contact_form_inbox";
		$query = $database->query($sql);

		$data = array();
		
		while($row = mysqli_fetch_array($query)){
			$data[] = $row;
		}
		return $data;
	}

	public function get_message($id){
		global $database;

		$sql = "SELECT * FROM contact_form_inbox WHERE id='".$id."'";
		$query = $database->query($sql);

		$value = $query->fetch_array();

		return $value;

	}

	public function delete_contact($id){
		global $database; 

		$sql = "DELETE FROM contact_form_inbox WHERE id='".$id."'";
		return $database->query($sql);
	}
}



?>