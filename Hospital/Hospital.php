<?php

class Hospital 
{
	private static $instance;
	private $name;
	private $deprtment = [];
	public $doctor= [];
	private function __construct($name)
	{
		$this->name = $name;
	}
	
	private function __clone()
	{}
	
	public function getInstance($name)
	{
		if (is_null(self::$instance))
		{
			return self::$instance = new self($name);
		}
		 return self::$instance;
	} 
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setDepartment(Department $value)
	{
		return $this->deprtment[] = $value;
	}
	
	public function getDepartment()
	{
		return $this->deprtment;
	}
	
	public function getDoctor()
	{
		return $this->doctor;
	}
	public function setDoctor(Doctor $value)
	{
		return $this->doctor[] = $value;
	}
	public function addPatient(Doctor $doctor,Patient $patient)
	{
	  
		$doctor->inspection($patient);
		
		if ($patient->getPlan()->getDiagnoza() === "bolnoSyrce") {
			for($i = 0; $i<count($this->deprtment);$i++) {
				if ($this->deprtment[$i]->getNameDepartment() ==="kardiologiq") {
					return  "nastanqvane ...".PHP_EOL.
					$this->deprtment[$i]->getRandomRoom(rand(0,9))->addPatients($doctor,$patient);
				}
		}
		}
		if ($patient->getPlan()->getDiagnoza() === "schupenKrak") {
			  for($i = 0; $i<count($this->deprtment);$i++) {
			  	if ($this->deprtment[$i]->getNameDepartment() ==="ortopedia") {
			  		return "nastanqvane...".PHP_EOL.
			  		$this->deprtment[$i]->room[rand(0,9)]->addPatients($doctor,$patient);
			  	}
		}
		}
		if ($patient->getPlan()->getDiagnoza() === "grip") {
		    for($i = 0; $i<count($this->deprtment);$i++) {
		    	if ($this->deprtment[$i]->getNameDepartment() ==="virusologiq") {
		    		return "nastanqvane...".PHP_EOL.
		    		$this->deprtment[$i]->room[rand(0,9)]->addPatients($doctor,$patient);
		    	}
		   }
		}
	}
}
		
		
