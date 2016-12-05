<?php

class mail {

	public $to = "8ahuntington@gmail.com";
	public $from;
	public $header = "From Contact Form";
	public $name;
	public $phone;
	public $message;

	// public function send(){
	// 	$send = mail($this->to,$this->from,$this->message,$this->header);
	// 	return $send;
	// }

	public function send_to_database(){
		global $database; 

		$name 		= $database->escape_string($this->name);
		$email 		= $database->escape_string($this->from);
		$phone  	= $database->escape_string($this->phone);
		$message 	= $database->escape_string($this->message);
		$date = utility::get_date();	

		$sql = "INSERT INTO contact_form_inbox (`date`,`name`,`email`,`phone`,`message`) VALUES ('{$date}','{$name}','{$email}','{$phone}','{$message}')";

		$to_database = $database->query($sql);

		return $to_database;
	}
}






?>