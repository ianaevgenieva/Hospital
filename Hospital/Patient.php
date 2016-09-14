<?php

class Patient extends Person
{  
	protected $pol;
	protected $plan ;
	public function __construct($firstName,$lastName,$pol)
	{
		parent::__construct($firstName, $lastName);
		$this->pol = $pol;
	}
	
	public function getPlan()
	{
		return $this->plan;
	}
	
	public function setPlan(Diagnoza $value)
	{
		return $this->plan = $value;
	}
	
	public function getPol()
	{
		return $this->pol;
	}
}