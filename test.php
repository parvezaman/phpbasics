<?php
class Fruit
{
    public $name;
    public $color;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
