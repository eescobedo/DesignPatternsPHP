<?php namespace StrategyPattern\Duck\Behavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly";
    }
}
