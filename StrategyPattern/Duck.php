<?php

abstract class Duck
{

    /**
     * @var \FlyBehavior
     */
    private $flyBehavior;

    /**
     * @var \QuackBehavior
     */
    private $quackBehavior;

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {

    }

    public function display()
    {

    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }


}
