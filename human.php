<?php
class Human
{
    public $name;
    public $gender;
    public $age;
    public $weight;
    public $height;

    public function __construct($name, $gender, $age, $weight, $height)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->weight = $weight;
        $this->height = $height;

        $result = $this->weight / ($this->height**2);

        if ($result<=18.5) {
            echo "Dear {$this->name}, <br> You are Underweight";
        } elseif ($result <= 24.9) {
            echo "Dear {$this->name}, <br> Your weight is normal";
        } elseif ($result <=29.9) {
            echo "Dear {$this->name}, <br> You are overweight";
        } else {
            echo "Dear {$this->name}, <br> You are obese";
        }
    }
}

$aman = new Human("Aman", "M", 29, 63, 1.7);
