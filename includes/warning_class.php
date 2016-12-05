<?php
class warning {

	public $name_warning = "*Please Enter your name.";
	public $email_warning = "*Please enter a valid email.";
	public $message_warning = "*Please enter a message.";
	public $universal_warning = "*Please enter this field.";

	public function inputFields_checker(){
		if(!preg_match("/[a-z]/i", $_POST['name'])){
		} elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		} elseif(!preg_match("/[a-z]/i", $_POST['message'])) {
		} else {

			return true;
			// header("Location: thankyou_page.php");
		}
	}

	public function warning_message($type){
		if(isset($_POST[$type])){
			$warning = $this->warning_type($type);
		} else {
			$warning = "";
		}
		// $warning= 'adsf';
		return $warning;
	}

	private function warning_type($type){
		if($type == "name"){
			if(!preg_match("/[a-z]/i", $_POST[$type])){
				$type = $type."_warning";
				$warning = $this->$type;
			} else {
				$warning = "";
			}
		}
		elseif($type == "email"){
			if(!filter_var($_POST[$type], FILTER_VALIDATE_EMAIL)){
				$type = $type."_warning";
				$warning = $this->$type;
			} else {
				$warning = "";
			}
		}
		elseif($type == "message"){
			if(!preg_match("/[a-z]/i", $_POST[$type])){
				$type = $type."_warning";
				$warning = $this->$type;
			} else {
				$warning = "";
			}
		}
		elseif($type != "") {
			if($_POST[$type] == ""){
				$type = "universal_warning";
				$warning = $this->$type;
			} else {
				$warning = "";
			}
		}
		return $warning;
	}
}




?>