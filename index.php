<?php

require 'src/person.php';
require 'src/business.php';
require 'src/staff.php';

require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name;


$florian = new Person("Florian");
$staff = new Staff([$florian]);
$warehouse = new Business($staff);

$warehouse->hire(new Person("John Doe"));

var_dump($staff->getMembers());

?>