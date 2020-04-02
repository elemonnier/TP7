<?php

abstract class Shape {
    abstract function getArea();
}

class Square extends Shape {
    private $width;
    private $height;
    public function __construct($width = 5, $height = 5) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea() {
        echo " area : ".($this->width * $this->height)."<br>";
    }
}

class Circle extends Shape {
    private $radius;
    public function __construct($radius = 5) {
        $this->radius = $radius;
    }
    public function getArea() {
        echo " area : ".($this->radius * 2 * pi())."<br>";
    }
}

$square = new Square();
$circle = new Circle();
$tab = array($square, $circle);
for ($i = 0; $i < count($tab); $i++){
    echo get_class($tab[$i]);
    $tab[$i]->getArea();
}