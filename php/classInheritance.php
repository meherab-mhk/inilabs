<?php

class Shape{
    protected $shape;

    public function setShape(){
        return $this->shape = $shape;
    }
}

class Circle extends Shape{
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
        
    }

    public function getShape(){
        return $this->shape = "Circle";
    }

    public function calculateArea(){
        return 3.1416 * $this->radius * $this->radius;
    }

    
}

class Rectangle extends Shape{
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->width  = $width;
        $this->height = $height;
    }

    public function getShape(){
        return $this->shape = "Rectangle";
    }
    public function calculateArea(){
        return $this->width * $this->height;
    }
}

$circle     = new Circle(4);
$rectangle  = new Rectangle(4,6);

echo $circle->getShape()." Area is:". " " .$circle->calculateArea(). " and ";
echo $rectangle->getShape()." Area is:". " ". $rectangle->calculateArea();
