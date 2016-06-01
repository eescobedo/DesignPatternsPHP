<?php namespace StrategyPattern\Duck\Behavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack";
    }
}