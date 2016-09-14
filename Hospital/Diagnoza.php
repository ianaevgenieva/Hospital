<?php

class Diagnoza
{
   protected $diagnoza;
   protected $lekarstva;
   protected $proceduri;
   protected $period;
   
   public function __construct($diagnoza,$lekarstva,$proceduri,$period)
   {
   	$this->diagnoza = $diagnoza;
   	$this->lekarstva = $lekarstva;
   	$this->proceduri = $proceduri;
   	$this->period = $period;
   }
   public function getDiagnoza()
   {
   	return $this->diagnoza;
   }
   
   public function setDiagnoza($value)
   {
   	return $this->diagnoza = $value;
   }
   
   public function getLekarstva()
   {
   	return $this->lekarstva;
   }
    
   public function setLekarstva($value)
   {
   	return $this->lekarstva = $value;
   }
   
   public function getProcedura()
   {
   	return $this->proceduri;
   }
    
   public function setProcedura($value)
   {
   	return $this->proceduri = $value;
   }
   
   public function getPeriod()
   {
   	return $this->period;
   }
    
   public function setPeriod($value)
   {
   	return $this->period = $value;
   }
   
}