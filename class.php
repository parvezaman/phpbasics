<?php
class Phone
{
    public $model;
    public $color;
    public $manufacturer;
    protected $batteryLife;
    private $weight;

    public function __construct($phoneColor, $phoneModel, $phoneManufacturer, $weight)
    {
        $this->color = $phoneColor;
        $this->model = $phoneModel;
        $this->manufacturer=$phoneManufacturer;
        $this->weight = $weight;
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

$iPhone6 = new Phone("black", "i phone 6", "Apple", "213 gm");
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


// trying access modifiers
// you can access the public anywhere
$iPhone6 -> model = "nokia 1100";
echo "<br>";
echo $iPhone6 -> model;

// protected method set_batteryLife() only can be accessed inside an inheritant
class featurePhone extends Phone
{
    public function set_batteryLife($batteryLife)
    {
        $this->batteryLife = $batteryLife;
    }

    public function print_batteryLife()
    {
        return $this->batteryLife;
    }

    public function set_weight($weight)
    {
        $this->weight= $weight;
    }
    public function print_weight()
    {
        return $this->weight;
    }
}

$nokia1250 = new featurePhone("black", "Nokia 1250", "Nokia", "213 gm");

$nokia1250->set_batteryLife("4500 nmAh");
$nokia1250->model="Nokia 1250";
echo "<br>";
echo $nokia1250 -> print_batteryLife(); // you cant call outside the inheritant because of its being protected proterty
echo "<br>";
$nokia1250->set_weight("213 gm");
echo "I like {$nokia1250 -> print_weight()} weight to my hand in {$nokia1250->model} phone"; // you cant call outside the inheritant because of its being protected proterty
