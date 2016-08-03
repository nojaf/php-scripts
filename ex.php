<?php 

use PhpScripts\Users\Person;
use PhpScripts\Staff;
use PhpScripts\Business;

$florian = new Person("Florian");
$staff = new Staff([$florian]);
$warehouse = new Business($staff);

$warehouse->hire(new Person("John Doe"));

var_dump($staff->getMembers());