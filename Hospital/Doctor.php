<?php

class Doctor extends Person
{
	protected $patients = [];
	public function __construct($firstName,$lastName)
	{
		parent::__construct($firstName, $lastName);
		
	}
	
	public function getPatients()
	{
		return $this->patients;
	}
	
	public function setPatients(Patient $value)
	{
		return $this->patients[] = $value;
	}
	public function inspection(Patient $value)
	{
		$diagnoza = ["bolnoSyrce","schupenKrak","grip"];
		$lekarstva = ["analgin","benalgin","aulin"];
		$proceduri = ["spane,qdene,pak spane","samo qdene","nishto pravene"];
		$period = [2,3,4];
		$diagnoza1 = $diagnoza[rand(0,2)];
		$lekarstva1 = $lekarstva[rand(0,2)];
		$proceduri1 = $proceduri[rand(0,2)];
		$period1 = $period[rand(0,2)];
		$diagnozaPatient = new Diagnoza($diagnoza1, $lekarstva1, $proceduri1, $period1);
		$value->setPlan($diagnozaPatient);
		
	}			
}