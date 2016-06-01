<?php namespace StrategyPattern\Duck\Behavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak!";
    }
}