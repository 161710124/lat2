<?php

class robot
{
	public $nama,$kegunaan;

	public function __construct($nama,$kegunaan)
	{
		$this->nama=$nama;
		$this->kegunaan=$kegunaan;

	}
	public function get_nama(){
		return $this->nama;
	}
		public function get_kegunaan(){
		return $this->kegunaan;
	}

}
?>