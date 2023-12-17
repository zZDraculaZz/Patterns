<?php
class Singleton
{
    private $instance;

    public function getInstance()
    {
        if (empty($instance))
        {
        $this->instance = $this;
        }

        return $this->instance;
    }
    public function sayHello()
    {
        echo "Hello World!";
    }
}