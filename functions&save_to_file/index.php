
<?php

require_once 'Car.php';

$car = new Car('BMW',
'pink',
  200,
   2016);

$car->show();
$car->save();
