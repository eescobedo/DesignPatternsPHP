<?php

require __DIR__ . '/../../vendor/autoload.php';

use StrategyPattern\Duck as Duck;
//use StrategyPattern\Duck\MallardDuck;
use Common\Utils;

$mallard = new Duck\MallardDuck();

$mallard->performQuack();
echo "-------";
$mallard->performFly();