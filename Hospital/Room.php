<?php

class Room
{
	public $firstBed;
    public  $secondBed;
	public $thirdBed;
	
	public function  __construct()
	{
		$this->firstBed = null;
		$this->firstBed = null;
		$this->thirdBed = null;
	}
	
	public function getFirst()
	{
		return $this->first;
	}
	
	public function setFirst(Patient $patient)
	{
		return $this->firstBed = $patient;
	}
	
	public function getSecond()
	{
		return $this->second;
	}
	
	public function setSecond(Patient $patient)
	{
		return $this->secondBed= $patient;
	}
	
	public function getThird()
	{
		return $this->thirdBed;
	}
	
	public function setThird(Patient $patient)
	{
		return $this->thirdBed = $patient;
	}
	
	public function addPatients(Doctor $doctor,Patient $patient)
	{
		if ($this->firstBed == null && $this->secondBed == null && $this->thirdBed == null) {
			$this->setFirst($patient);
			return "sussess nastanqvane for patient-> ".$patient->getFirstName()." ".
					$patient->getLastName()."  doctor-> ".$doctor->getLastName()."  with diagnose-> ".
					$patient->getPlan()->getDiagnoza().PHP_EOL;
		}
		
		if ($this->firstBed  != null && $this->secondBed !=null && $this->thirdBed ==null){
			if(($this->firstBed->getPol() == $this->secondBed->getPol())&& ($this->firstBed->getPol()==
					$patient->getPol())){
			 	
						$this->setThird($patient);
					return"sussess nastanqvane for patient-> ".$patient->getFirstName()." ".
					$patient->getLastName()."  doctor-> ".$doctor->getLastName()."  with diagnose-> ".
					$patient->getPlan()->getDiagnoza().PHP_EOL;
			}
		}
		
		if($this->firstBed !=null && ($this->secondBed ==null && $this->thirdBed == null)){
				if ($this->firstBed->getPol() == $patient->getPol()){
					$this->setThird($patient);
					return "sussess nastanqvane for patient-> ".$patient->getFirstName()." ".
							$patient->getLastName()."  doctor-> ".$doctor->getLastName()."  with diagnose-> ".
							$patient->getPlan()->getDiagnoza().PHP_EOL;
				}	
		}
		
		if (($this->firstBed == null) &&($this->secondBed != null)&& ($this->thirdBed != null)){
			if ($this->secondBed->getPol() == $this->thirdBed->getPol()&&
					($this->thirdBed->getPol() == $patient->getPol())){
					  $this->setFirst($patient);
					 return "sussess nastanqvane for patient-> ".$patient->getFirstName()." ".
					  		$patient->getLastName()."  doctor-> ".$doctor->getLastName()."  with diagnose-> ".
					  		$patient->getPlan()->getDiagnoza().PHP_EOL;
		
					}
		}
		
		if(($this->firstBed == null && $this->secondBed==null) && ($this->thirdBed !=null)){
			if($this->thirdBed->getPol() == $patient->getPol()) {
				$this->setFirst($patient);
				return "sussess nastanqvane for patient-> ".$patient->getFirstName()." ".
						$patient->getLastName()."  doctor-> ".$doctor->getLastName()."  with diagnose-> ".
						$patient->getPlan()->getDiagnoza().PHP_EOL;
			}
		}
		
		if(($this->firstBed !=null && $this->thirdBed !=null) && $this->secondBed ==null){
			if (($this->firstBed->getPol() == $this->thirdBed->getPol())&&
				($this->firstBed->getPol() == $patient->getPol())){
				 $this->setSecond($patient);
				 return "sussess nastanqvane for patient-> ".$patient->getFirstName()." ".
				 		$patient->getLastName()."  doctor-> ".$doctor->getLastName()."  with diagnose-> ".
				 		$patient->getPlan()->getDiagnoza().PHP_EOL;
			}
		}
	}
}
						

