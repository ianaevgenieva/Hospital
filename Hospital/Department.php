<?php

class Department
{
	protected $name;
	public $room = [];
	
	
	public function __construct($name)
	{
		$this->name  = $name;
		for ($i = 0; $i < 10; $i ++) {
			$this->room[]= new Room();
		}
		
	}
	public function getNameDepartment()
	{
		return $this->name;
	}
	
	public function getRoom()
	{
		return $this->room;
	}
	public function getRandomRoom($value)
	{
		return $this->room[$value];
	}

}