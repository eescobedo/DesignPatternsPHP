<?php namespace StrategyPattern\Duck\Behavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "-- Silence --";
    }
}