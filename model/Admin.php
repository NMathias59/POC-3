<?php

class Admin {
	private $userName;
	private $password;


	public
	function getuserName() {
		return $this->userName;
	}
	public
	function setuserName( $userName ) {
		$this->userName = $userName;
	}

	public
	function getpassword() {
		return $this->password;
	}
	public
	function setpassword( $password ) {
		$this->password = $password;
	}
}
	