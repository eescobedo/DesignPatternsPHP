<?php namespace StrategyPattern\Duck;

use StrategyPattern\Duck\Behavior\FlyWithWings;
use StrategyPattern\Duck\Behavior\Quack;

use Common\Utils;

class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real mallard duck";
        Utils::println("I'm a real Mallard duck");
    }
}