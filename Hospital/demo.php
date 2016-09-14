<?php

require_once "autoload.php";

$doctor = new Doctor("pencho", "iavorov");
$hospital = Hospital::getInstance("pirogov");
echo $hospital->getName().PHP_EOL;
$department1 = new Department("kardiologiq");
$department2 = new Department('ortopedia');
$department3 = new Department("virusologiq");
$patient = new Patient("iana", "iakimova", "f");
$doctor->setPatients($patient);
$hospital->setDepartment($department1);
$hospital->setDepartment($department2);
$hospital->setDepartment($department3);
$hospital->setDoctor($doctor);
$patient2 = new Patient("veselin", "kadriec", "m");
$patient3 = new Patient("megi", "bashlieva", "f");
 echo $hospital->addPatient($doctor, $patient2);
 echo $hospital->addPatient($doctor, $patient3);
echo  $hospital->addPatient($doctor,$patient);
