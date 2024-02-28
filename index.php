<?php
namespace image;

class person{
    private string $color;
    private string $name;
    private int $age;
    public function __construct($name, $age,)
    {
        $this->age = $age;
        $this->name = $name;
        echo "one person was created";
    }
}
$person = new person('soroush',18);