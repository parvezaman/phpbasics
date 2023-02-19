<?php
class Phone
{
    public $model;
    public $color;
    public $manufacturer;

    public function __construct($phoneColor, $phoneModel, $phoneManufacturer)
    {
        $this->color = $phoneColor;
        $this->model = $phoneModel;
        $this->manufacturer=$phoneManufacturer;
    }

    public function printObject()
    {
        echo "i got a ".$this->color ." colored ".$this->model ." from ". $this->manufacturer;
    }

    public function __destruct()
    {
        echo "<br> so we are at the end of printing {$this->model} from {$this->manufacturer}";
    }
}

$iPhone6 = new Phone("black", "i phone 6", "Apple");
echo "<br>";
$iPhone6->printObject();
echo "<br>";
echo $iPhone6->model;
echo "<br>";
var_dump($iPhone6 instanceof Phone);
echo "<br>";
echo $iPhone6->manufacturer;
echo "<br>";
echo $iPhone6->manufacturer;
echo "<br>";


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

$apple = new Fruit("Guava");
echo $apple->get_name();
