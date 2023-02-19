<?php
class Phone
{
    public $color;
    public $model;
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
}

$iPhone6 = new Phone("black", "i phone 6", "Apple");
$iPhone6->printObject();
echo $iPhone6->model;
