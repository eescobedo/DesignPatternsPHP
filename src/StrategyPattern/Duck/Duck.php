<?php namespace StrategyPattern\Duck;

abstract class Duck
{

    /**
     * @var \StrategyPattern\Duck\Behavior\FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var \StrategyPattern\Duck\Behavior\QuackBehavior
     */
    protected $quackBehavior;

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!";
    }

    public abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }


}
