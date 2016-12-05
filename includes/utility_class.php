<?php

class utility {

	public static function get_date(){
		date_default_timezone_set('America/chicago');
		$date = date('y/m/d H:i:s');
		return $date;
	}


}


?>