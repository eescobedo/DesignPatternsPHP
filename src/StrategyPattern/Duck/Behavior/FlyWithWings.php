<?php namespace StrategyPattern\Duck\Behavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying!!";
    }
}
